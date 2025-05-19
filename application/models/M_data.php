<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class M_Data extends CI_Model {
    
    function simpandata($data,$tb) {
        $this->db->insert($tb, $data);
    }
    function simpandatawithconfirm($data,$tb) {
        $this->db->insert($tb, $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    function getdata($db){
        return $this->db->get($db)->result(); 
    }
    function caridata($indikator,$value,$tb) { // single row
        return $this->db->get_where($tb, array($indikator => $value))->row();
    }
    function cariMultidata($data,$tb) {
        $query = $this->db->where($data)->get($tb);

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $result[] = $data;
            }
            return $result;
        }
    }
    function updatedata($indikator,$value,$data,$tb) {
        $this->db->where($indikator, $value);
        return $this->db->update($tb, $data);
    }
    function updatedataall($data,$tb) {
        return $this->db->update($tb, $data);
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
    function searchDatabyorder($data,$tb,$indikator,$asc) {
        $this->db->select('*');
        $this->db->from($tb);
        $this->db->where($data);
        $this->db->order_by($indikator,$asc);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $id[] = $data;
            }
            return $id;
        }
    }
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
    function getTbbycond1($tb, $cond) {
        $query = $this->db->query("SELECT * FROM $tb where $cond");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $datalist[] = $data;
            }
            return $datalist;
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
    function getTbbycond3($selection, $tb, $cond) {
        $query = $this->db->query("SELECT $selection FROM $tb where $cond");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $datalist[] = $data;
            }
            return $datalist;
        }
    }
    function hapusDatabyId($indikator,$val,$tb) {
        $this->db->where($indikator, $val);
        return $this->db->delete($tb);
    }
    function countdata($select,$tb,$condition){
        $this->db->select($select);
        $this->db->from($tb);
        $this->db->where($condition);
        return $this->db->count_all_results();
    }
    //-------------------------------------------------------------------------------------------------------------------------------------------------------
    //    Pagination
    function getPengumuman($limit, $start) {
        $query = $this->db->query("select * from pengumuman order by tglpos desc limit $start, $limit");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $pengumuman[] = $data;
            }
            return $pengumuman;
        }
    }
    function caripengumuman($limit, $start, $where1, $where2) {
        $query = $this->db->query("SELECT * FROM pengumuman WHERE ( $where1 or $where2 )  order by idpengumuman desc limit $start , $limit");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $jurnal[] = $data;
            }
            return $jurnal;
        }
    }
    //------------------------------------------------------------------------------------------------------------------------------------------------------
    function get_news() {
        $query = $this->db->get('usulan');
        return $query->result_array();
    }
    //------------------------------------------------------------------------------------------------------------------------------------------------------
    function getSK() {
        $query = $this->db->query("SELECT * FROM USULAN, skema, usulananggota, peneliti, prodi, departemen "
                . "where usulan.idskema=skema.idskema and usulan.idusulan=usulananggota.idusulan and posisi='Ketua' "
                . "and usulananggota.nipnim=peneliti.nipnim and usulan.statususulan='Didanai' "
                . "and peneliti.idprodi=prodi.idprodi and prodi.iddepartemen=departemen.iddepartemen");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $datalist[] = $data;
            }
            return $datalist;
        }
//        $this->db->select('*');
//        $this->db->from($tb);
//        $this->db->order_by($indikator, $asc);

//        $query = $this->db->get();
//        if ($query->num_rows() > 0) {
//            foreach ($query->result() as $data) {
//                $id[] = $data;
//            }
//            return $id;
//        }
    }
    

}
?>