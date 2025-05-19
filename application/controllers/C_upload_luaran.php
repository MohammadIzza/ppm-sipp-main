<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_upload_luaran extends CI_Controller {
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
            $lastperiode=$this->m_data->getLastID('idperiode','periode');
            //setting periode
            if(!isset($_SESSION['periode-uplu'])){
                $_SESSION['periode-uplu']=$lastperiode[0]->idperiode;
            }
            if($_SESSION['periode-uplu'] != ""){
                $setperiode="&& usulan.idperiode='".$_SESSION['periode-uplu']."'";
            }else{
                $setperiode="";
            }
            //setting jenis
            if(!isset($_SESSION['jenis-uplu'])){
                $_SESSION['jenis-uplu']="";
            }
            if($_SESSION['jenis-uplu'] != ""){
                $setjenis="&& usulanfile.idjenis='".$_SESSION['jenis-uplu']."'";
            }else{
                $setjenis="";
            }
            
            $user=$this->session->userdata('logged_in');
            $iduser=$user['iduser'];
            $data['usulan']=$this->m_data->getTbbycond2("usulan, usulananggota, peneliti", "usulan.statususulan='Didanai' and usulan.idusulan=usulananggota.idusulan and usulananggota.nipnim=peneliti.nipnim and peneliti.iduser='$iduser' group by usulan.idusulan", "usulan.idusulan", "desc");
            $data['ppm']=$this->m_data->getTbbycond2("usulanfile, jenisfile, usulan, usulananggota, peneliti", "usulanfile.idjenis=jenisfile.idjenis and jenisfile.kategori='luaran' and usulanfile.idusulan=usulan.idusulan and usulan.statususulan='Didanai' and usulan.idusulan=usulananggota.idusulan and usulananggota.nipnim=peneliti.nipnim and peneliti.iduser='$iduser' $setperiode $setjenis group by usulanfile.idfile", "usulanfile.idfile", "desc");
            $data['jenisfile'] = $this->m_data->getTbbycond2("jenisfile", "kategori='luaran'", "jenisfile.idjenis", "asc");
            $data['periode'] = $this->m_data->getAllbyorder('idperiode','desc','periode');
            
            $this->load->view('v_upload_luaran',$data);
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function setperiode() {
        if ($this->session->userdata('logged_in')) {  
            $idperiode = $this->input->post('id');
            $_SESSION['periode-uplu'] = $idperiode;
            $response=1;            
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function setjenis() {
        if ($this->session->userdata('logged_in')) {  
            $idjenis = $this->input->post('id');
            $_SESSION['jenis-uplu'] = $idjenis;
            $response=1;            
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function uploadluaran(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            define('MB', 1048576);
            date_default_timezone_set('Asia/Jakarta');

            $config['upload_path']="./uploads/luaran/"; //path folder file upload
            $config['allowed_types']='pdf'; //type file yang boleh di upload -- pengaturan di js 
            $config['encrypt_name'] = False; //enkripsi file name upload
            $config['max_size'] = 5*MB; //pengaturan di js 
            
            $idusulan= $this->input->post('idusulan');
            $idjenis= $this->input->post('idjenis');
            $judulluaran= $this->input->post('judulluaran');
            $keterangan= $this->input->post('keterangan');
            
            $usulan = $this->m_data->getTbbycond1("usulan, skema, usulananggota, peneliti", "usulan.idusulan='$idusulan' && usulan.idskema=skema.idskema && usulan.idusulan=usulananggota.idusulan && usulananggota.nipnim=peneliti.nipnim && usulananggota.posisi='Ketua'");
            $jenisfile = $this->m_data->caridata('idjenis',$idjenis,'jenisfile');
            if($jenisfile->idjenis=='10'){ // 10 : Luaran Lain (Model | Prototype | Karya Seni/Desain/Kriya/Bangunan dan Arsitektur | Rekayasa Sosial)
                $namajenisfile='Luaran Lain';
            }else{
                $namajenisfile=$jenisfile->namafile;
            }
            $new_name = str_replace(".",'',$usulan[0]->namalengkap)."_".$usulan[0]->namaskema."_ID-".$idusulan."_".str_replace(" ",'_',$namajenisfile);
            $config['file_name'] = $new_name; 
            
            $this->load->library('upload',$config); //call library upload 
            if($this->upload->do_upload("file")){ //upload file
                $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
                $namafile= $data['upload_data']['file_name']; 
                
                //new
                $datafile=array(
                    'idusulan' => $idusulan,
                    'idjenis' => $idjenis, 
                    'judulluaran' => $judulluaran, 
                    'keterangan' => $keterangan, 
                    'fileloc' => $config['upload_path']."".$namafile,
                    'tglunggah' => date('Y-m-d')
                );
                $result= $this->m_data->simpandatawithconfirm($datafile,'usulanfile');
                if($result){
                    $response=1;
                }
                
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function getluaran() {
        if ($this->session->userdata('logged_in')) {
            $idfile = $this->input->get('idfile');        
            $luaran = $this->m_data->caridata('idfile',$idfile,'usulanfile');
            if (!empty($luaran)) {
                if ($luaran->fileloc != "") {
                    $path = $luaran->fileloc;
                    $file = explode('/', $path);
                    $file_luaran=$file[3];
                }else{
                    $file_luaran=$luaran->fileloc;
                }

                $data = array(
                    "idfile" => $idfile,
                    "idusulan" => $luaran->idusulan,
                    "idjenis" => $luaran->idjenis,
                    "judulluaran" => $luaran->judulluaran,
                    "keterangan" => $luaran->keterangan,
                    "luaran" => $file_luaran
//                    "fileloc" => $file_luaran
                );
            }
            echo json_encode($data);
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function editluaran(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            define('MB', 1048576);
            date_default_timezone_set('Asia/Jakarta');

            $config['upload_path']="./uploads/luaran/"; //path folder file upload
            $config['allowed_types']='pdf'; //type file yang boleh di upload -- pengaturan di js 
            $config['encrypt_name'] = False; //enkripsi file name upload
            $config['max_size'] = 5*MB; //pengaturan di js 
            
            $idfile= $this->input->post('idfile_edit');
            $idusulan= $this->input->post('idusulan_edit');
            $idjenis= $this->input->post('idjenis_edit');
            $judulluaran= $this->input->post('judulluaran_edit');
            $keterangan= $this->input->post('keterangan_edit');
            $uploadedfile= $this->input->post('uploadedfile');            
            
            if($uploadedfile!="") {
                $usulan = $this->m_data->getTbbycond1("usulan, skema, usulananggota, peneliti", "usulan.idusulan='$idusulan' && usulan.idskema=skema.idskema && usulan.idusulan=usulananggota.idusulan && usulananggota.nipnim=peneliti.nipnim && usulananggota.posisi='Ketua'");
                $jenisfile = $this->m_data->caridata('idjenis',$idjenis,'jenisfile');
                if($jenisfile->idjenis=='10'){ // 10 : Luaran Lain (Model | Prototype | Karya Seni/Desain/Kriya/Bangunan dan Arsitektur | Rekayasa Sosial)
                    $namajenisfile='Luaran Lain';
                }else{
                    $namajenisfile=$jenisfile->namafile;
                }
                $new_name = str_replace(".",'',$usulan[0]->namalengkap)."_".$usulan[0]->namaskema."_ID-".$idusulan."_".str_replace(" ",'_',$namajenisfile);
                $config['file_name'] = $new_name; 

    //            $datafile=array(
    //                    'idfile' => $idfile,
    //                    'idusulan' => $idusulan,
    //                    'idjenis' => $idjenis, 
    //                    'judulluaran' => $judulluaran, 
    //                    'keterangan' => $keterangan, 
    ////                    'fileloc' => $config['upload_path']."".$namafile,
    //                    'tglunggah' => date('Y-m-d')
    //                );
    //            print_r($datafile); die();

                $this->load->library('upload',$config); //call library upload 
                if($this->upload->do_upload("file_edit")){ //upload file
                    $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
                    $namafile= $data['upload_data']['file_name']; 

                    //edit
                    $datafile=array(
                        'idusulan' => $idusulan,
                        'idjenis' => $idjenis, 
                        'judulluaran' => $judulluaran, 
                        'keterangan' => $keterangan, 
                        'fileloc' => $config['upload_path']."".$namafile,
                        'tglunggah' => date('Y-m-d')
                    );
                    $result= $this->m_data->updatedata('idfile',$idfile,$datafile,'usulanfile');
                    if($result){
                        $response=1;
                    }
                }
            }else{
                $datafile=array(
                    'idusulan' => $idusulan,
                    'idjenis' => $idjenis, 
                    'judulluaran' => $judulluaran, 
                    'keterangan' => $keterangan
                );
                $result= $this->m_data->updatedata('idfile',$idfile,$datafile,'usulanfile');
                if($result){
                    $response=1;
                }
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function hapusluaran(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            $idfile = $this->input->post('id');

            $hapusluaran=$this->m_data->hapusDatabyId('idfile',$idfile,'usulanfile');
            if($hapusluaran){
                $response=1;
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
         
}
