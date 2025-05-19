<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_upload_laporan extends CI_Controller {
    public function __construct() {
    parent::__construct();
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->model('m_data');
    }
    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            $_SESSION['menu'] = 'upload';
            $user=$this->session->userdata('logged_in');
            $iduser=$user['iduser'];
            $data['ppm']=$this->m_data->getTbbycond2("usulan, usulananggota, peneliti, periode", "usulan.idusulan=usulananggota.idusulan && usulan.statususulan='Didanai' && usulananggota.nipnim=peneliti.nipnim && peneliti.iduser='$iduser' && usulan.idperiode=periode.idperiode", "usulan.idusulan", "desc");
            $data['file']=$this->m_data->getTbbycond2("jenisfile, usulanfile", "jenisfile.idjenis && usulanfile.idjenis && jenisfile.kategori='laporan'", "jenisfile.idjenis", 'asc');          
            $data['jenisfile'] = $this->m_data->getTbbycond2("jenisfile", "kategori='laporan' and namafile != 'Proposal'", "jenisfile.idjenis", "asc");
            $data['skema'] = $this->m_data->getAllbyorder('program','asc','skema');
            $this->load->view('v_upload_laporan',$data);
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function uploadlaporan(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            define('MB', 1048576);
            date_default_timezone_set('Asia/Jakarta');

            $config['upload_path']="./uploads/laporan/"; //path folder file upload
            $config['allowed_types']='pdf'; //type file yang boleh di upload -- pengaturan di js 
            $config['encrypt_name'] = False; //enkripsi file name upload
            $config['max_size'] = 5*MB; //pengaturan di js 
            
            $idusulan= $this->input->post('idusulan');
            $idjenis= $this->input->post('idjenis');
            
            $usulan = $this->m_data->getTbbycond1("usulan, skema, usulananggota, peneliti", "usulan.idusulan='$idusulan' && usulan.idskema=skema.idskema && usulan.idusulan=usulananggota.idusulan && usulananggota.nipnim=peneliti.nipnim && usulananggota.posisi='Ketua'");
            $jenisfile = $this->m_data->caridata('idjenis',$idjenis,'jenisfile');
            $new_name = str_replace(".",'',$usulan[0]->namalengkap)."_".$usulan[0]->namaskema."_ID-".$idusulan."_".str_replace(" ",'_',$jenisfile->namafile);
            $config['file_name'] = $new_name; 
            
            $this->load->library('upload',$config); //call library upload 
            if($this->upload->do_upload("file")){ //upload file
                $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
                $namafile= $data['upload_data']['file_name']; 
                
                $search['idusulan']=$idusulan;
                $search['idjenis']=$jenisfile->idjenis; 
                $fileupload= $this->m_data->cariMultidata($search,'usulanfile');
                if(empty($fileupload)){
                    //new
                    $datafile=array(
                        'idusulan' => $idusulan,
                        'idjenis' => $idjenis, 
                        'fileloc' => $config['upload_path']."".$namafile,
                        'tglunggah' => date('Y-m-d')
                    );
                    $result= $this->m_data->simpandatawithconfirm($datafile,'usulanfile');
                    if($result){
                        $response=1;
                    }
                }else{
                    //edit
                    $datafile=array(
                        'fileloc' => $config['upload_path']."".$namafile,
                        'tglunggah' => date('Y-m-d')
                    );
                    $result= $this->m_data->updatedata('idfile',$fileupload[0]->idfile,$datafile,'usulanfile');
                    if($result){
                        $response=1;
                    }
                }
                
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
         
}
