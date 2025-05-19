<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_profil extends CI_Controller {
    public function __construct() {
    parent::__construct();
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->model('m_data');
    }
    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            if(isset($_SESSION['menu'])){
                unset(
                    $_SESSION['menu']
                );
            }
            if(!isset($_SESSION['tab_profil'])){
                $_SESSION['tab_profil'] = 'akun';
            }
            $user=$this->session->userdata('logged_in');            
            $iduser=$user['iduser'];
            if($user['previledges']=='peneliti'){
                $data['user']=$this->m_data->getTbbycond3("iduser, username, password, peneliti.namalengkap as namapeneliti, user.namalengkap as namaakun, avatar, nipnim, gelardepan, gelarblkg, idprodi", "user, peneliti", "user.id=peneliti.iduser && user.id='$iduser'");
                $data['prodi']=$this->m_data->getAllbyorder('namaprodi','asc','prodi');
            }else{
                $data['user']=$this->m_data->getTbbycond3("id, username, password, user.namalengkap as namaakun, avatar", "user", "user.id='$iduser'");
            }
            
            $this->load->view('v_profil',$data);
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function simpanprofilpersonal()
    {
        if ($this->session->userdata('logged_in')) {
            $_SESSION['tab_profil'] = 'personal';
            $response=0;
            
            define('MB', 1048576);
            $user=$this->session->userdata('logged_in');

            $nipnim = $this->input->post('nipnim');
            $namalengkap = $this->input->post('namalengkap');
            $gelardepan = $this->input->post('gelardepan');
            $gelarblkg = $this->input->post('gelarblkg');
            $idprodi = $this->input->post('idprodi');

//            $config['upload_path']="./uploads/avatar/"; //path folder file upload
//            $config['allowed_types']='gif|jpg|jpeg|png'; //type file yang boleh di upload -- pengaturan di js 
//            $config['encrypt_name'] = False; //enkripsi file name upload
//            $config['max_size'] = 5*MB; //pengaturan di js 
//
//            $new_name = "_ID-".$user['iduser']."_".$namalengkap;
//            $config['file_name'] = $new_name;           
//
//            $this->load->library('upload',$config); //call library upload 
//            if($this->upload->do_upload("profile_avatar")){ //upload file
//                $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
//                $namafile= $data['upload_data']['file_name']; 

                $dataakun=array(
                    'namalengkap' => $namalengkap,
//                        'avatar' => $config['upload_path']."".$namafile
                );
                $result= $this->m_data->updatedata('id',$user['iduser'],$dataakun,'user');
                if($result){
                    //update session
                    $sess_array = array(
                        'username' => $user['username'],
                        'name' => $namalengkap,
                        'previledges' => $user['previledges'],
                        'iduser' => $user['iduser']
                    );
                    $this->session->set_userdata('logged_in', $sess_array);
                    
                    $datapeneliti=array(
                        'nipnim' => $nipnim,
                        'namalengkap' => $namalengkap,
                        'gelardepan' => $gelardepan,
                        'gelarblkg' => $gelarblkg,
                        'idprodi' => $idprodi
                    );
                    $result2= $this->m_data->updatedata('iduser',$user['iduser'],$datapeneliti,'peneliti');
                    if(result2){
                        $response=1;
                    }
                }

//            }
            
            
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function simpanprofilakun()
    {
        if ($this->session->userdata('logged_in')) {
            $response=0;
            $_SESSION['tab_profil'] = 'akun';
            $user=$this->session->userdata('logged_in');
            
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $newpassword = $this->input->post('newpassword');
            $cpassword = $this->input->post('cpassword');
            
            $result = $this->m_data->caridata('username',$username,'user');
            if(!empty($result)){
                if(password_verify($password,$result->password)){
                    if($newpassword==$cpassword){                
                        $hashedPassword = password_hash($newpassword, PASSWORD_BCRYPT, array('cost'=>12));
                        $dataakun=array(
                            'password' => $hashedPassword
                        );
                        $result= $this->m_data->updatedata('id',$user['iduser'],$dataakun,'user');
                        if($result){
                            $response=1;
                        }
                    }else{
                        $response=2;
                    }
                }else{
                    $response=3;
                }
            }
            
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }

    function simpanusulan_f4()
    {
        if ($this->session->userdata('logged_in')) {
            $response=0;
            if(isset($_SESSION['usulan'])){
                $idusulan=$_SESSION['usulan'][0]->idusulan;
                //cek step 2
                $search_f2['idusulan']=$idusulan;
                $search_f2['posisi']="Ketua"; 
                $penelitiketua= $this->m_data->cariMultidata($search_f2,'usulananggota');
                //cek step 3
                $search_f3['idusulan']=$idusulan;
                $search_f3['posisi']="Anggota"; 
                $penelitianggota= $this->m_data->cariMultidata($search_f3,'usulananggota');
                //cek step 4
                $search_f4['idusulan']=$idusulan;
                $fileproposal= $this->m_data->cariMultidata($search_f4,'usulanfile');
                if(!empty($penelitiketua) && !empty($penelitianggota) && !empty($fileproposal)){
                    $datausulan=array('statususulan' => 'Final');
                    $updateusulan=$this->m_data->updatedata('idusulan',$_SESSION['usulan'][0]->idusulan,$datausulan,'usulan');
                    if($updateusulan){
                        unset(
                            $_SESSION['tab'],
                            $_SESSION['usulananggota'],
                            $_SESSION['usulan'],
                            $_SESSION['proposal']
                        );
                        $response=1;
                    } 
                }    
            }            
            
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function editloadingpage($idusulan){
        $usulan=$this->m_data->caridata('idusulan',$idusulan,'usulan');
        if($usulan->statususulan=="Final"){
            unset(
                $_SESSION['tab_edit'],
                $_SESSION['usulan_edit'],
                $_SESSION['usulananggota_edit'],
                $_SESSION['proposal_edit']
            ); 
        }else{
            $_SESSION['tab_edit'] = $usulan->statusproposal;
        }
        redirect('c_usulan/edit/'.$idusulan, 'refresh');
    }
    function edit($idusulan)
    {
        if ($this->session->userdata('logged_in')) {
            $user=$this->session->userdata('logged_in');
            
            if(!isset($_SESSION['tab_edit'])){
                $_SESSION['tab_edit'] = 'f1';
            }
            $_SESSION['usulan_edit'] = $this->m_data->getTbbycond1("usulan, usulananggota", "usulan.idusulan=usulananggota.idusulan && posisi='Ketua' && usulan.idusulan='$idusulan'");
            $_SESSION['usulananggota_edit'] = $this->m_data->getTbbycond1("peneliti, usulananggota, prodi", "peneliti.nipnim=usulananggota.nipnim && peneliti.idprodi=prodi.idprodi && posisi='Anggota' && usulananggota.idusulan='$idusulan'");
            $_SESSION['proposal_edit'] = $this->m_data->getTbbycond1("usulanfile", "idusulan='$idusulan' && idjenis in(select idjenis from jenisfile where namafile='proposal')");                    
            
            $search['status'] = 'aktif';
            $data['skema']=$this->m_data->searchDatabyorder($search,'skema','program','asc'); //get skema from active period                
            $data['prodi']=$this->m_data->getAllbyorder('namaprodi','asc','prodi');
            $data['peneliti']=$this->m_data->caridata('iduser',$user['iduser'],'peneliti');
            $data['anggotapeneliti']=$this->m_data->getAllbyorder('namalengkap','asc','peneliti');
            
            $this->load->view('v_usulan_edit',$data);
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function simpanusulan_f1_edit()
    {
        if ($this->session->userdata('logged_in')) {
            $response=0;
            
            $idusulan=$_SESSION['usulan_edit'][0]->idusulan;
            $idskema = $this->input->post('idskemaedit');
            $judul = $this->input->post('juduledit');
            $dana = $this->input->post('danaedit');
            $datausulan=array(
                'idskema' => $idskema,
                'judul' => $judul,
                'dana' => preg_replace('/[^0-9]/','',$dana)
            );
            $update=$this->m_data->updatedata('idusulan',$idusulan,$datausulan,'usulan');
            if($update){
                $_SESSION['usulan_edit'] = $this->m_data->getTbbycond1("usulan, usulananggota", "usulan.idusulan=usulananggota.idusulan && posisi='Ketua' && usulan.idusulan='$idusulan'");
                $_SESSION['usulananggota_edit'] = $this->m_data->getTbbycond1("peneliti, usulananggota, prodi", "peneliti.nipnim=usulananggota.nipnim && peneliti.idprodi=prodi.idprodi && posisi='Anggota' && usulananggota.idusulan='$idusulan'");
                $_SESSION['proposal_edit'] = $this->m_data->getTbbycond1("usulanfile", "idusulan='$idusulan' && idjenis in(select idjenis from jenisfile where namafile='proposal')");
                $_SESSION['tab_edit'] = 'f2';
                $response=1;
            }         
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function simpanusulan_f2_edit()
    {
        if ($this->session->userdata('logged_in')) {
            $response=0;
            if(isset($_SESSION['usulan_edit'])){
                $idusulan=$_SESSION['usulan_edit'][0]->idusulan;
                $nipnim = $this->input->post('nipnim');
                $gelardepan = $this->input->post('gelardepan');
                $namalengkap = $this->input->post('namalengkap');
                $gelarblkg = $this->input->post('gelarblkg');
                $status = $this->input->post('status');
                $idprodi = $this->input->post('idprodi');

                $datapeneliti=array(
                    'gelardepan' => $gelardepan,
                    'namalengkap' => $namalengkap,
                    'gelarblkg' => $gelarblkg,
                    'status' => $status,
                    'idprodi' => $idprodi
                );

                $updatepeneliti=$this->m_data->updatedata('nipnim',$nipnim,$datapeneliti,'peneliti');
                if($updatepeneliti){
                    $datausulan=array('statusproposal' => 'f3');
                    $updateusulan=$this->m_data->updatedata('idusulan',$_SESSION['usulan_edit'][0]->idusulan,$datausulan,'usulan');
                    if($updateusulan){
                        $_SESSION['usulan_edit'] = $this->m_data->getTbbycond1("usulan, usulananggota", "usulan.idusulan=usulananggota.idusulan && posisi='Ketua' && usulan.idusulan='$idusulan'");
                        $_SESSION['usulananggota_edit'] = $this->m_data->getTbbycond1("peneliti, usulananggota, prodi", "peneliti.nipnim=usulananggota.nipnim && peneliti.idprodi=prodi.idprodi && posisi='Anggota' && usulananggota.idusulan='$idusulan'");
                        $_SESSION['proposal_edit'] = $this->m_data->getTbbycond1("usulanfile", "idusulan='$idusulan' && idjenis in(select idjenis from jenisfile where namafile='proposal')");
                        $_SESSION['tab_edit'] = 'f3';
                        $response=1;
                    }                    
                }
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }

    function tambahanggota_edit(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            if(isset($_SESSION['usulan_edit'])){
                $nipnim = $this->input->post('nipnimanggota');
                $idusulan=$_SESSION['usulan_edit'][0]->idusulan;
                $dataanggota=array(
                    'idusulan' => $idusulan,
                    'nipnim' => $nipnim,
                    'posisi' => 'Anggota'
                );
                $simpananggota=$this->m_data->simpandatawithconfirm($dataanggota,'usulananggota');
                if($simpananggota){
                    $datausulan=array('statusproposal' => 'f3');
                    $updateusulan=$this->m_data->updatedata('idusulan',$_SESSION['usulan'][0]->idusulan,$datausulan,'usulan');
                    $_SESSION['usulananggota_edit'] = $this->m_data->getTbbycond1("peneliti, usulananggota, prodi", "peneliti.nipnim=usulananggota.nipnim && peneliti.idprodi=prodi.idprodi && posisi='Anggota' && usulananggota.idusulan='$idusulan'");
                    $_SESSION['tab_edit'] = 'f3';
                    $response=1;                    
                }
            }            
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function hapusanggota_edit(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            if(isset($_SESSION['usulan_edit'])){
                $idanggota = $this->input->post('id');
                $idusulan=$_SESSION['usulan_edit'][0]->idusulan;

                $hapusanggota=$this->m_data->hapusDatabyId('idanggota',$idanggota,'usulananggota');
                if($hapusanggota){
                    $datausulan=array('statusproposal' => 'f3');
                    $updateusulan=$this->m_data->updatedata('idusulan',$_SESSION['usulan_edit'][0]->idusulan,$datausulan,'usulan');
                    $_SESSION['usulananggota_edit'] = $this->m_data->getTbbycond1("peneliti, usulananggota, prodi", "peneliti.nipnim=usulananggota.nipnim && peneliti.idprodi=prodi.idprodi && posisi='Anggota' && usulananggota.idusulan='$idusulan'");
                    $_SESSION['tab_edit'] = 'f3';
                    $response=1;
                }
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function simpanusulan_f3_edit()
    {
        if ($this->session->userdata('logged_in')) {
            $response=0;
            if(isset($_SESSION['usulan_edit'])){
                $idusulan=$_SESSION['usulan_edit'][0]->idusulan;
                $search['idusulan']=$idusulan;
                $search['posisi']="Anggota"; 
                $penelitianggota= $this->m_data->cariMultidata($search,'usulananggota');
                if(!empty($penelitianggota)){
                    $datausulan=array('statusproposal' => 'f4');
                    $updateusulan=$this->m_data->updatedata('idusulan',$_SESSION['usulan_edit'][0]->idusulan,$datausulan,'usulan');
                    if($updateusulan){
                        $_SESSION['usulan_edit'] = $this->m_data->getTbbycond1("usulan, usulananggota", "usulan.idusulan=usulananggota.idusulan && posisi='Ketua' && usulan.idusulan='$idusulan'");
                        $_SESSION['usulananggota_edit'] = $this->m_data->getTbbycond1("peneliti, usulananggota, prodi", "peneliti.nipnim=usulananggota.nipnim && peneliti.idprodi=prodi.idprodi && posisi='Anggota' && usulananggota.idusulan='$idusulan'");
                        $_SESSION['proposal_edit'] = $this->m_data->getTbbycond1("usulanfile", "idusulan='$idusulan' && idjenis in(select idjenis from jenisfile where namafile='proposal')");
                        $_SESSION['tab_edit'] = 'f4';
                        $response=1;
                    } 
                }
            }            
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function uploadproposal_edit()
    {
        if ($this->session->userdata('logged_in')) {
            $response=0;
            if(isset($_SESSION['usulan_edit'])){
                define('MB', 1048576);
                date_default_timezone_set('Asia/Jakarta');

                $config['upload_path']="./uploads/proposal/"; //path folder file upload
                $config['allowed_types']='pdf'; //type file yang boleh di upload -- pengaturan di js 
                $config['encrypt_name'] = False; //enkripsi file name upload
                $config['max_size'] = 5*MB; //pengaturan di js 

                $idusulan=$_SESSION['usulan_edit'][0]->idusulan;
                $usulan = $this->m_data->getTbbycond1("usulan, skema, usulananggota, peneliti", "usulan.idusulan='$idusulan' && usulan.idskema=skema.idskema && usulan.idusulan=usulananggota.idusulan && usulananggota.nipnim=peneliti.nipnim && usulananggota.posisi='Ketua'");
                $new_name = str_replace(".",'',$usulan[0]->namalengkap)."_".$usulan[0]->namaskema."_ID-".$idusulan."_proposal";
                $config['file_name'] = $new_name;           

                $this->load->library('upload',$config); //call library upload 
                if($this->upload->do_upload("file")){ //upload file
                    $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
                    $namafile= $data['upload_data']['file_name']; 

                    //cari idjenis untuk proposal
                    $jenisfile = $this->m_data->caridata('namafile','proposal','jenisfile');

                    $search['idusulan']=$idusulan;
                    $search['idjenis']=$jenisfile->idjenis; 
                    $fileupload= $this->m_data->cariMultidata($search,'usulanfile');
                    if(empty($fileupload)){
                        //new
                        $datafile=array(
                            'idusulan' => $idusulan,
                            'idjenis' => $jenisfile->idjenis, 
                            'fileloc' => $config['upload_path']."".$namafile,
                            'tglunggah' => date('Y-m-d')
                        );
                        $result= $this->m_data->simpandatawithconfirm($datafile,'usulanfile');
                        if($result){
                            $_SESSION['proposal_edit'] = $this->m_data->getTbbycond1("usulanfile", "idusulan='$idusulan' && idjenis in(select idjenis from jenisfile where namafile='proposal')");
                            $_SESSION['tab_edit'] = 'f4';
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
                            $_SESSION['proposal_edit'] = $this->m_data->getTbbycond1("usulanfile", "idusulan='$idusulan' && idjenis='1'");
                            $_SESSION['tab_edit'] = 'f4';
                            $response=1;
                        }
                    }   
                }
            }
            
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }

    function simpanusulan_f4_edit()
    {
        if ($this->session->userdata('logged_in')) {
            $response=0;
            if(isset($_SESSION['usulan_edit'])){
                $idusulan=$_SESSION['usulan_edit'][0]->idusulan;
                //cek step 2
                $search_f2['idusulan']=$idusulan;
                $search_f2['posisi']="Ketua"; 
                $penelitiketua= $this->m_data->cariMultidata($search_f2,'usulananggota');
                //cek step 3
                $search_f3['idusulan']=$idusulan;
                $search_f3['posisi']="Anggota"; 
                $penelitianggota= $this->m_data->cariMultidata($search_f3,'usulananggota');
                //cek step 4
                $search_f4['idusulan']=$idusulan;
                $fileproposal= $this->m_data->cariMultidata($search_f4,'usulanfile');
                if(!empty($penelitiketua) && !empty($penelitianggota) && !empty($fileproposal)){
                    $datausulan=array('statususulan' => 'Final');
                    $updateusulan=$this->m_data->updatedata('idusulan',$_SESSION['usulan_edit'][0]->idusulan,$datausulan,'usulan');
                    if($updateusulan){
                        unset(
                            $_SESSION['tab_edit'],
                            $_SESSION['usulananggota_edit'],
                            $_SESSION['usulan_edit'],
                            $_SESSION['proposal_edit']
                        );
                        $response=1;
                    } 
                }    
            }            
            
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    
    function tgl_indo($tanggal){
        $bulan = array (
                1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
        );
        $pecahkan = explode('-', $tanggal);

        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
         
}
