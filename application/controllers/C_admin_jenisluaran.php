<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_admin_jenisluaran extends CI_Controller {
    public function __construct() {
    parent::__construct();
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->model('m_data');
    }
    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            $_SESSION['menu'] = 'jenisluaran';
            $data['kategori'] = 'luaran';
            $data['luaran']=$this->m_data->searchDatabyorder($data,'jenisfile','namafile','asc');
            
            $this->load->view('v_admin_jenisluaran',$data);
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function tambahjenisluaran(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            
            $namafile= $this->input->post('namafile');
            $jenisfile= $this->m_data->caridata('namafile',$namafile,'jenisfile');
            if(empty($jenisfile)){
                $data=array(
                    'namafile' => $namafile,
                    'kategori' => 'luaran'
                );
                $result= $this->m_data->simpandatawithconfirm($data,'jenisfile');
                if($result){
                    $response=1;
                }
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function getjenisluaran() {
        if ($this->session->userdata('logged_in')) {
            
            $idjenis = $this->input->get('idjenis');        
            $luaran = $this->m_data->caridata('idjenis',$idjenis,'jenisfile');
            if (!empty($luaran)) {
                $data = array(
                    "idjenis" => $idjenis,
                    "namafile" => $luaran->namafile
                );
            }
            echo json_encode($data);
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function editjenisluaran(){
        if ($this->session->userdata('logged_in')) {
            
            $idjenis= $this->input->post('idjenis_edit');
            $namafile= $this->input->post('namafile_edit');
            
            $data=array(
                'namafile' => $namafile
            );
            $result= $this->m_data->updatedata('idjenis',$idjenis,$data,'jenisfile');
            if($result){
                $response=1;
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function hapusjenisluaran(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            $idjenis = $this->input->post('id');
            
            $fileupload=$this->m_data->caridata('idjenis',$idjenis,'usulanfile');
            
            if(empty($fileupload)){
                $hapusjenis=$this->m_data->hapusDatabyId('idjenis',$idjenis,'jenisfile');
                if($hapusjenis){
                    $response=1;
                }
            }
            
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
         
}
