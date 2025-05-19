<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_generate extends CI_Model {

//    function get_news() {
//        $query = $this->db->get('jenisfile');
//        return $query->result_array();
//    }
    function getAllbyorder($indikator,$asc,$tb) {
        $this->db->select('*');
        $this->db->from($tb);
        $this->db->order_by($indikator,$asc);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $id[] = $data;
            }
            return $id;
        }
    }
    function caridata($indikator,$value,$tb) { // single row
        return $this->db->get_where($tb, array($indikator => $value))->row();
    }
    function simpandatawithconfirm($data,$tb) {
        $this->db->insert($tb, $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    function updatedata($indikator,$value,$data,$tb) {
        $this->db->where($indikator, $value);
        return $this->db->update($tb, $data);
    }
    function hapusDatabyId($indikator,$val,$tb) {
        $this->db->where($indikator, $val);
        return $this->db->delete($tb);
    }
    function getLastID($indikator,$tb) {
        $this->db->select('*');
        $this->db->from($tb);
        $this->db->order_by($indikator,'desc');
        $this->db->limit(1);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $id[] = $data;
            }
            return $id;
        }
    }
    function getTbbycond2($tb, $cond, $order_by, $asc) {
        $query = $this->db->query("SELECT * FROM $tb where $cond order by $order_by $asc");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $datalist[] = $data;
            }
            return $datalist;
        }
    }
    function getSK($idsk) {
        $query = $this->db->query("SELECT * FROM sk, template "
                . "where sk.idtemplate=template.idtemplate and sk.idsk='$idsk'");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $datalist[] = $data;
            }
            return $datalist;
        }
    }
    function gettableSK($idsk) {
        $query = $this->db->query("SELECT * FROM sk,usulan, skema, usulananggota, peneliti, prodi, departemen "
                . "where usulan.idskema=skema.idskema and usulan.idusulan=usulananggota.idusulan and posisi='Ketua' "
                . "and usulananggota.nipnim=peneliti.nipnim and usulan.statususulan='Didanai' "
                . "and peneliti.idprodi=prodi.idprodi and prodi.iddepartemen=departemen.iddepartemen "
                . "and sk.idsk='$idsk' and sk.idperiode=usulan.idperiode and sk.idtemplate=skema.idtemplate "
                . "order by departemen.namadepartemen");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $datalist[] = $data;
            }
            return $datalist;
        }
    }
    function cekketua($idsk) {
        $query = $this->db->query("SELECT count(usulan.idusulan) as jmlketuamhs FROM sk,usulan, skema, usulananggota, peneliti, prodi, departemen "
                . "where usulan.idskema=skema.idskema and usulan.idusulan=usulananggota.idusulan and posisi='Ketua'"
                . "and usulananggota.nipnim=peneliti.nipnim and peneliti.status='Mahasiswa' and usulan.statususulan='Didanai' "
                . "and peneliti.idprodi=prodi.idprodi and prodi.iddepartemen=departemen.iddepartemen "
                . "and sk.idsk='$idsk' and sk.idperiode=usulan.idperiode and sk.idtemplate=skema.idtemplate "
                . "order by departemen.namadepartemen");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $datalist[] = $data;
            }
            return $datalist;
        }
    }

}  