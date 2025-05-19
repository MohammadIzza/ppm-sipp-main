<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_admin_staff extends CI_Controller {
    public function __construct() {
    parent::__construct();
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->model('m_data');
    }
    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            $_SESSION['menu'] = 'staff';
            
            //setting prodi
            if(!isset($_SESSION['prodi'])){
                $_SESSION['prodi']="";
            }
            if($_SESSION['prodi'] != ""){
                $setprodi="&& user.idprodiadmin='".$_SESSION['prodi']."'";
            }else{
                $setprodi="";
            }
            
            $data['staff']=$this->m_data->getTbbycond2("user", " user.previledges='admin prodi' $setprodi", "idprodiadmin", "asc");
            $data['prodi'] = $this->m_data->getAllbyorder('namaprodi','asc','prodi');
            
            $this->load->view('v_admin_staff',$data);
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function setprodi() {
        if ($this->session->userdata('logged_in')) {  
            $idprodi = $this->input->post('id');
            $_SESSION['prodi'] = $idprodi;
            $response=1;            
        }else{
            redirect('welcome', 'refresh');
        }
    }
    public function tambahakun()
    {
        if ($this->session->userdata('logged_in')) {
            $response=0;
            $email = $this->input->post('email');
            $namalengkap = $this->input->post('namalengkap');  
            $idprodiadmin = $this->input->post('idprodiadmin');
            
            $user=$this->m_data->caridata('username',$email,'user');
            if(empty($user)){
//                $kata="students.undip.ac.id";
                $kata="staff.undip.ac.id";            
                if(preg_match("/$kata/i", $email)){
                    //generate simple random code
                    $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $code = substr(str_shuffle($set), 0, 12);
                                        
                    $password = $this->generate(10);
                    $hashedPassword = password_hash($password, PASSWORD_BCRYPT, array('cost'=>12));
                    $data=array(
                        'username' => $email,
                        'namalengkap' => $namalengkap,
                        'password' => $hashedPassword,
                        'previledges' => 'admin prodi',
                        'idprodiadmin' => $idprodiadmin,
                        'verifcode' => $code,
                        'aktivasi' => 'false'
                    );
                    $simpanuser=$this->m_data->simpandatawithconfirm($data, 'user');
                    if($simpanuser){
                        $id = $this->m_data->getLastID('id','user');                        
                        //KIRIM EMAIL VERIFIKASI
                        $this->load->library('email');
                        $config = array();
                        $config['charset'] = 'utf-8';
                        $config['useragent'] = 'Codeigniter';
                        $config['protocol'] = "smtp";
                        $config['mailtype'] = "html";
                        $config['smtp_host'] = "smtp.gmail.com"; //pengaturan smtp
                        $config['smtp_port'] = "465";
                        $config['smtp_timeout'] = "400";
                        $config['smtp_user'] = "ppm.fsmundip@gmail.com"; // isi dengan email kamu
                        $config['smtp_pass'] = "@ppmfsmUndip"; // isi dengan password kamu
                        $config['crlf'] = "\r\n";
                        $config['newline'] = "\r\n";
                        $config['wordwrap'] = TRUE;
                        $message =  "<html>
                                    <head>
                                    <title>[Sukses] Aktivasi Akun</title>
                                    </head>
                                    <body>
                                    <p>Yth. Bapak/Ibu <b>$namalengkap</b></p>
                                    <p>Anda terdaftar sebagai Admin Program Studi pada <a href='".base_url()."index.php'>Aplikasi PPM</a> Fakultas Sains dan Matematika Universitas Diponegoro. 
                                    <br/>Akun anda sebagai berikut:</p>
                                    <table border='0' width='100%' style='padding-top:10px;padding-bottom:10px'>
                                    <tr><td width='20%'>Username</td><td width='5%'>:</td><td width='75%'>$email</td></tr>
                                    <tr><td width='20%'>Password</td><td width='5%'>:</td><td width='75%'>$password</td></tr>
                                    </table>
                                    <p>Klik link berikut untuk melakukan aktivasi akun :</p>
                                    <h4><a href='".base_url()."index.php/welcome/activate/".$id[0]->id."/".$code."'>Aktivasi Akun Saya</a></h4>
                                    <br/><br/>
                                    <b>FAKULTAS SAINS DAN MATEMATIKA UNDIP</b><br/>
                                    Jalan Prof. Soedarto, SH, Kampus Undip Tembalang Semarang, Jawa Tengah 50275<br/>
                                    Telp./Fax. (024) 747 4754<br/>
                                    Email : fsm@undip.ac.id<br/>
                                    </body>
                                    </html>
                                    ";

                        //memanggil library email dan set konfigurasi untuk pengiriman email
                        $this->email->initialize($config);

                        //konfigurasi pengiriman
                        $this->email->from($config['smtp_user']);
                        $this->email->to($email);
                        $this->email->subject("[Sukses] Aktivasi Akun PPM FSM Undip");
                        $this->email->message($message);
                        //notifikasi registrasi berhasil
                        if ($this->email->send()) {
                            $response=1;
                        } else {
                            echo "Eror: ".$mail->ErrorInfo;
                        }
                        //END 
                    }
                }
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
    ///Generate Password pada tambah akun
    function generate($panjang){
        $karakter = '';
        $karakter .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; // karakter alfabet
        $karakter .= '1234567890'; // karakter numerik
        $karakter .= '@#$^*()_+=/?'; // karakter simbol

        $string = '';
        for ($i=0; $i < $panjang; $i++) { 
         $pos = rand(0, strlen($karakter)-1);
         $string .= $karakter[$pos];
        }
        return $string;
    }
    function generate_password(){
        $response=$this->generate(10);
        echo $response;
    }
    function ketetapan() {
        if ($this->session->userdata('logged_in')) {            
            $response=0;
            
            $id = $this->input->post('id');
            $data= explode("-", $id);
            $id=$data[0];
            $aktivasi=$data[1];
            if($id != ""){
                $data=array(
                    "aktivasi" => $aktivasi
                );
                
                $result= $this->m_data->updatedata('id',$id,$data,'user');
                if($result){
                    $response=1;
                }
            }           
            
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
        
    }
    function hapusakun(){
        if ($this->session->userdata('logged_in')) {
            $response=0;
            $id = $this->input->post('id');

            $hapusakunadmin=$this->m_data->hapusDatabyId('id',$id,'user');
            if($hapusakunadmin){
                $response=1;
            }
            echo $response;
        }else{
            redirect('welcome', 'refresh');
        }
    }
         
}
