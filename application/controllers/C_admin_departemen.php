<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_admin_departemen extends CI_Controller {
    public function __construct() {
    parent::__construct();
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->model('m_data');
    }
    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            $_SESSION['menu'] = 'h-departemen';
            
            $data['departemen']=$this->m_data->getAllbyorder('namadepartemen','asc','departemen');
            
            $this->load->view('v_admin_departemen',$data);
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function tambahdepartemen(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            
            $namadepartemen= $this->input->post('namadepartemen');
            $departemen= $this->m_data->caridata('namadepartemen',$namadepartemen,'departemen');
            if(empty($departemen)){
                $data=array(
                    'namadepartemen' => $namadepartemen
                );
                $result= $this->m_data->simpandatawithconfirm($data,'departemen');
                if($result){
                    $response=1;
                }
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function getdepartemen() {
        if ($this->session->userdata('logged_in')) {
            
            $iddepartemen = $this->input->get('iddepartemen');        
            $departemen = $this->m_data->caridata('iddepartemen',$iddepartemen,'departemen');
            if (!empty($departemen)) {
                $data = array(
                    "iddepartemen" => $iddepartemen,
                    "namadepartemen" => $departemen->namadepartemen
                );
            }
            
            echo json_encode($data);
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function editdepartemen(){
        if ($this->session->userdata('logged_in')) {
            
            $iddepartemen= $this->input->post('iddepartemen_edit');
            $namadepartemen= $this->input->post('namadepartemen_edit');
            
            $data=array(
                'namadepartemen' => $namadepartemen
            );
            $result= $this->m_data->updatedata('iddepartemen',$iddepartemen,$data,'departemen');
            if($result){
                $response=1;
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function hapusdepartemen(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            $iddepartemen = $this->input->post('id');
            
            $prodi=$this->m_data->caridata('iddepartemen',$iddepartemen,'prodi');
            
            if(empty($prodi)){
                $hapusdepartemen=$this->m_data->hapusDatabyId('iddepartemen',$iddepartemen,'departemen');
                if($hapusdepartemen){
                    $response=1;
                }
            }
            
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
         
}
