<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_admin_skema extends CI_Controller {
    public function __construct() {
    parent::__construct();
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->model('m_data');
    }
    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            $_SESSION['menu'] = 'skema';
            
            $data['skema']=$this->m_data->getAllbyorder('program','asc','skema');
            
            $this->load->view('v_admin_skema',$data);
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function tambahskema(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            
            $namaskema= $this->input->post('namaskema');
            $program= $this->input->post('program');
            $skema= $this->m_data->caridata('namaskema',$namaskema,'skema');
            if(empty($skema)){
                $data=array(
                    'namaskema' => $namaskema,
                    'program' => $program
                );
                $result= $this->m_data->simpandatawithconfirm($data,'skema');
                if($result){
                    $response=1;
                }
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function getskema() {
        if ($this->session->userdata('logged_in')) {
            
            $idskema = $this->input->get('idskema');        
            $skema = $this->m_data->caridata('idskema',$idskema,'skema');
            if (!empty($skema)) {
                $data = array(
                    "idskema" => $idskema,
                    "namaskema" => $skema->namaskema,
                    "program" => $skema->program
                );
            }
            
            echo json_encode($data);
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function editskema(){
        if ($this->session->userdata('logged_in')) {
            
            $idskema= $this->input->post('idskema_edit');
            $namaskema= $this->input->post('namaskema_edit');
            $program= $this->input->post('program_edit');
            
            $data=array(
                "namaskema" => $namaskema,
                "program" => $program
            );
            $result= $this->m_data->updatedata('idskema',$idskema,$data,'skema');
            if($result){
                $response=1;
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function hapusskema(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            $idskema = $this->input->post('id');
            
            $usulan=$this->m_data->caridata('idskema',$idskema,'usulan');
            
            if(empty($usulan)){
                $hapus=$this->m_data->hapusDatabyId('idskema',$idskema,'skema');
                if($hapus){
                    $response=1;
                }
            }
            
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
         
}
