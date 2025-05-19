<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_admin_prodi extends CI_Controller {
    public function __construct() {
    parent::__construct();
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->model('m_data');
    }
    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            $_SESSION['menu'] = 'h-prodi';
            
            $data['prodi']=$this->m_data->getTbbycond2("prodi, departemen", "prodi.iddepartemen=departemen.iddepartemen", "departemen.namadepartemen", "asc");
            $data['departemen']=$this->m_data->getAllbyorder('namadepartemen','asc','departemen');
            
            $this->load->view('v_admin_prodi',$data);
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function tambahprodi(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            
            $namaprodi= $this->input->post('namaprodi');
            $iddepartemen= $this->input->post('iddepartemen');
            $prodi= $this->m_data->caridata('namaprodi',$namaprodi,'prodi');
            if(empty($prodi)){
                $data=array(
                    'namaprodi' => $namaprodi,
                    'iddepartemen' => $iddepartemen
                );
                $result= $this->m_data->simpandatawithconfirm($data,'prodi');
                if($result){
                    $response=1;
                }
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function getprodi() {
        if ($this->session->userdata('logged_in')) {
            
            $idprodi = $this->input->get('idprodi');        
            $prodi = $this->m_data->caridata('idprodi',$idprodi,'prodi');
            if (!empty($prodi)) {
                $data = array(
                    "idprodi" => $idprodi,
                    "iddepartemen" => $prodi->iddepartemen,
                    "namaprodi" => $prodi->namaprodi
                );
            }
            
            echo json_encode($data);
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function editprodi(){
        if ($this->session->userdata('logged_in')) {
            
            $idprodi= $this->input->post('idprodi_edit');
            $iddepartemen= $this->input->post('iddepartemen_edit');
            $namaprodi= $this->input->post('namaprodi_edit');
            
            $data=array(
                'namaprodi' => $namaprodi,
                'iddepartemen' => $iddepartemen
            );
            $result= $this->m_data->updatedata('idprodi',$idprodi,$data,'prodi');
            if($result){
                $response=1;
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function hapusprodi(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            $idprodi = $this->input->post('id');
            
            $peneliti=$this->m_data->caridata('idprodi',$idprodi,'peneliti');
            
            if(empty($peneliti)){
                $hapusprodi=$this->m_data->hapusDatabyId('idprodi',$idprodi,'prodi');
                if($hapusprodi){
                    $response=1;
                }
            }
            
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
         
}
