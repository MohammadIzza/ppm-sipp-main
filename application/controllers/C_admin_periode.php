<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_admin_periode extends CI_Controller {
    public function __construct() {
    parent::__construct();
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->model('m_data');
    }
    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            $_SESSION['menu'] = 'periode';
            
            $data['periode']=$this->m_data->getAllbyorder('idperiode','desc','periode');
            $data['skema']=$this->m_data->getAllbyorder('program','asc','skema');
            
            $this->load->view('v_admin_periode',$data);
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function tambahperiode(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            
            $nama= $this->input->post('nama');
            $start= $this->input->post('start');
            $end= $this->input->post('end');
            
            if ($start != "") {
                $tgl = explode('/', $start);
                $start_edit=$tgl['2']."-".$tgl['0']."-".$tgl['1'];
            }
            if ($end != "") {
                $tgl = explode('/', $end);
                $end_edit=$tgl['2']."-".$tgl['0']."-".$tgl['1'];
            }
            
            //edit
            $data=array(
                'nama' => $nama,
                'start' => $start_edit, 
                'end' => $end_edit,
                'end_laporan' => '0000-00-00'
            );
            $result= $this->m_data->simpandatawithconfirm($data,'periode');
            if($result){
                $dataskema=array(
                    'status' => 'nonaktif'
                );
                $this->m_data->updatedataall($dataskema,'skema');
                $response=1;
            }
            
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function checkskema(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            
            $idskema = $this->input->post('idskema');
            
            if (!empty($idskema)) {
                $data = array(
                    "status" => "aktif"
                );
                $result= $this->m_data->updatedata('idskema',$idskema,$data,'skema');
                if($result){
                    $response=1;
                }
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function uncheckskema(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            
            $idskema = $this->input->post('idskema');
            
            if (!empty($idskema)) {
                $data = array(
                    "status" => "nonaktif"
                );
                $result= $this->m_data->updatedata('idskema',$idskema,$data,'skema');
                if($result){
                    $response=1;
                }
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function editnamaperiode(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            $idperiode= $this->input->post('idperiode');
            $nama= $this->input->post('nama');

            if($nama!=""){
               
                $data=array(
                    'nama' => $nama
                );
                $result= $this->m_data->updatedata('idperiode',$idperiode,$data,'periode');
                if($result){
                    $response=1;
                }
                
            }
                  
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function editstartdate(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            
            $start= $this->input->post('startdate');
//            $start="08/28/2021";
            if($start!=""){
                if ($start != "") {
                    $tgl = explode('/', $start);
                    $start_edit=$tgl['2']."-".$tgl['0']."-".$tgl['1'];
                }

                //edit
                $data=array(
                    'start' => $start_edit
                );
                $periode=$this->m_data->getLastID('idperiode','periode');
                if(!empty($periode)){
                    $result= $this->m_data->updatedata('idperiode',$periode[0]->idperiode,$data,'periode');
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
    function editenddate(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            
            $end= $this->input->post('enddate');

            if($end!=""){
                if ($end != "") {
                    $tgl = explode('/', $end);
                    $end_edit=$tgl['2']."-".$tgl['0']."-".$tgl['1'];
                }

                //edit
                $data=array(
                    'end' => $end_edit
                );
                $periode=$this->m_data->getLastID('idperiode','periode');
                if(!empty($periode)){
                    $result= $this->m_data->updatedata('idperiode',$periode[0]->idperiode,$data,'periode');
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
    function editenddate_laporan(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            
            $end= $this->input->post('enddate_laporan');
            $idperiode= $this->input->post('idperiode');

            if($end!=""){
                if ($end != "") {
                    $tgl = explode('/', $end);
                    $end_edit=$tgl['2']."-".$tgl['0']."-".$tgl['1'];
                }

                //edit
                $data=array(
                    'end_laporan' => $end_edit
                );
//                $periode=$this->m_data->getLastID('idperiode','periode');
//                if(!empty($periode)){
                    $result= $this->m_data->updatedata('idperiode',$idperiode,$data,'periode');
                    if($result){
                        $response=1;
                    }
//                }      
            }
                  
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
         
}
