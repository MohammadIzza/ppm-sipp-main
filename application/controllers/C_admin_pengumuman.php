<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_admin_pengumuman extends CI_Controller {
    public function __construct() {
    parent::__construct();
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->model('m_data');
    }
    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            $_SESSION['menu'] = 'pengumuman';
            
            $data['pengumuman']=$this->m_data->getAllbyorder('idpengumuman','desc','pengumuman');
//            $data['ppm']=$this->m_data->getTbbycond2("usulan, usulananggota, peneliti", "usulan.idusulan=usulananggota.idusulan && usulananggota.nipnim=peneliti.nipnim && peneliti.iduser='$iduser'", "usulan.idusulan", "desc");
//            $data['skema'] = $this->m_data->getAllbyorder('program','asc','skema');
//            $data['periode']=$this->m_data->getLastID('idperiode','periode');            
//            $data['dateline']= $this->tgl_indo($data['periode'][0]->end);
            
            $this->load->view('v_admin_pengumuman',$data);
        }else{
            redirect('welcome', 'refresh');
        }
    }
//    function tambahpengumuman()
//    {
//        if ($this->session->userdata('logged_in')) {
//            $this->load->view('v_admin_pengumumantambah');
//        }else{
//            redirect('welcome', 'refresh');
//        }
//    }
    function simpantambahpengumuman()
    {
        if ($this->session->userdata('logged_in')) {
            $response=0;
            date_default_timezone_set('Asia/Jakarta');
            
            $judul = $this->input->post('judul');
            $isi = $this->input->post('kt-ckeditor-2');
            
            $data=array(
                    'judul' => $judul,
                    'isi' => $isi,
                    'tglpos' => date("Y-m-d H:i:s")
                );
            $result= $this->m_data->simpandatawithconfirm($data,'pengumuman');
            if($result){
                $response=1;
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function editpengumuman($id)
    {
        if ($this->session->userdata('logged_in')) {
            $data['pengumuman']=$this->m_data->caridata('idpengumuman',$id,'pengumuman');
            $data['lampiran']=$this->m_data->getTbbycond1("pengumumanlampiran", "idpengumuman=$id");
            $this->load->view('v_admin_pengumumanedit',$data);
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function simpaneditpengumuman()
    {
        if ($this->session->userdata('logged_in')) {
            $response=0;
            date_default_timezone_set('Asia/Jakarta');
            
            $idpengumuman = $this->input->post('idpengumuman');
            $judul = $this->input->post('judul');
            $isi = $this->input->post('kt-ckeditor-2');
            
            $data=array(
                    'judul' => $judul,
                    'isi' => $isi,
                    'tglpos' => date("Y-m-d H:i:s")
                );
            $result= $this->m_data->updatedata('idpengumuman',$idpengumuman,$data,'pengumuman');
            if($result){
                $response=1;
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function uploadlampiran(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            define('MB', 1048576);

            $config['upload_path']="./uploads/pengumuman/"; //path folder file upload
            $config['allowed_types']='pdf|docx'; //type file yang boleh di upload -- pengaturan di js 
            $config['encrypt_name'] = False; //enkripsi file name upload
            $config['max_size'] = 5*MB; //pengaturan di js 
            
            $idpengumuman = $this->input->post('idpengumuman');
            $namalampiran = $this->input->post('namalampiran');
            
            $new_name = "ID-".$idpengumuman."_".$namalampiran;
            $config['file_name'] = $new_name; 
            
            $this->load->library('upload',$config); //call library upload 
            if($this->upload->do_upload("file")){ //upload file
                $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
                $namafile= $data['upload_data']['file_name']; 
                
                //new
                $datafile=array(
                    'idpengumuman' => $idpengumuman,
                    'namalampiran' => $namalampiran, 
                    'lampiran' => $config['upload_path']."".$namafile,
                );
                $result= $this->m_data->simpandatawithconfirm($datafile,'pengumumanlampiran');
                if($result){
                    $response=1;
                }
                
                
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function getlampiran() {
        if ($this->session->userdata('logged_in')) {
            $idlampiran = $this->input->get('idlampiran');        
            $lampiran = $this->m_data->caridata('id',$idlampiran,'pengumumanlampiran');
            if (!empty($lampiran)) {
                if ($lampiran->lampiran != "") {
                    $path = $lampiran->lampiran;
                    $file = explode('/', $path);
                    $file_luaran=$file[3];
                }else{
                    $file_luaran=$lampiran->lampiran;
                }

                $data = array(
                    "idlampiran" => $idlampiran,
                    "idpengumuman" => $lampiran->idpengumuman,
                    "namalampiran" => $lampiran->namalampiran,
                    "lampiran" => $file_luaran
                );
            }
            echo json_encode($data);
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function editlampiran(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            define('MB', 1048576);

            $config['upload_path']="./uploads/pengumuman/"; //path folder file upload
            $config['allowed_types']='pdf|docx'; //type file yang boleh di upload -- pengaturan di js 
            $config['encrypt_name'] = False; //enkripsi file name upload
            $config['max_size'] = 5*MB; //pengaturan di js 
            
            $id = $this->input->post('id_edit');
            $idpengumuman = $this->input->post('idpengumuman_edit');
            $namalampiran = $this->input->post('namalampiran_edit');
            $uploadedfile= $this->input->post('uploadedfile');            
            
            if($uploadedfile!="") {
                $new_name = "ID-".$idpengumuman."_".$namalampiran;
                $config['file_name'] = $new_name; 

                $this->load->library('upload',$config); //call library upload 
                if($this->upload->do_upload("file_edit")){ //upload file
                    $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
                    $namafile= $data['upload_data']['file_name']; 

                    //new
                    $datafile=array(
                        'idpengumuman' => $idpengumuman,
                        'namalampiran' => $namalampiran, 
                        'lampiran' => $config['upload_path']."".$namafile,
                    );

                    $result= $this->m_data->updatedata('id',$id,$datafile,'pengumumanlampiran');
                    if($result){
                        $response=1;
                    }     
                }
            }else{
                $datafile=array(
                    'idpengumuman' => $idpengumuman,
                    'namalampiran' => $namalampiran, 
                );

                $result= $this->m_data->updatedata('id',$id,$datafile,'pengumumanlampiran');
                if($result){
                    $response=1;
                } 
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function hapuslampiran(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            $id = $this->input->post('idlampiran');

            $hapuslampiran=$this->m_data->hapusDatabyId('id',$id,'pengumumanlampiran');
            if($hapuslampiran){
                $response=1;
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function hapuspengumuman(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            $id = $this->input->post('id');
            $lampiran = $this->m_data->caridata('idpengumuman',$id,'pengumumanlampiran');
            if (!empty($lampiran)) {
                $this->m_data->hapusDatabyId('idpengumuman',$id,'pengumumanlampiran');
            }
            $hapuspengumuman=$this->m_data->hapusDatabyId('idpengumuman',$id,'pengumuman');
            if($hapuspengumuman){
                $response=1;
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
         
}
