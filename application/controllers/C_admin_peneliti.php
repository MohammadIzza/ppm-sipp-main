<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_admin_peneliti extends CI_Controller {
    public function __construct() {
    parent::__construct();
    $this->load->helper('form');
    $this->load->helper('url');
    $this->load->model('m_data');
    }
    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            $_SESSION['menu'] = 'peneliti';
            
            //setting status
            if(!isset($_SESSION['status'])){
                $_SESSION['status']="";
            }
            if($_SESSION['status'] != ""){
                $setstatus="&& peneliti.status='".$_SESSION['status']."'";
            }else{
                $setstatus="";
            }
            //setting prodi
            if(!isset($_SESSION['prodi'])){
                $_SESSION['prodi']="";
            }
            if($_SESSION['prodi'] != ""){
                $setprodi="&& peneliti.idprodi='".$_SESSION['prodi']."'";
            }else{
                $setprodi="";
            }
            
            $data['peneliti']=$this->m_data->getTbbycond2("user, peneliti", "user.id=peneliti.iduser && user.previledges='peneliti' $setstatus $setprodi", "peneliti.nipnim", "asc");
            $data['prodi'] = $this->m_data->getAllbyorder('namaprodi','asc','prodi');
            
            $this->load->view('v_admin_peneliti',$data);
        }else{
            redirect('welcome', 'refresh');
        }
    }
    function setstatus() {
        if ($this->session->userdata('logged_in')) {  
            $status = $this->input->post('id');
            $_SESSION['status'] = $status;
            $response=1;            
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
    function tambahakun() {
            $response=0;
            $email = strtolower($this->input->post('email'));
            $nipnim = $this->input->post('nipnim');
            $namalengkap = $this->input->post('namalengkap');
            $idprodi = $this->input->post('idprodi');
            $password = $this->input->post('password');
            
            $user=$this->m_data->caridata('username',$email,'user');
            $peneliti=$this->m_data->caridata('nipnim',$nipnim,'peneliti');
            
            $kata1="lecturer.undip.ac.id";
//            $kata2="students.undip.ac.id";
            $kata2="gmail.com";
            
            if(empty($user) && empty($peneliti)){
                if(strlen($nipnim)>=14){
                    if(preg_match("/$kata1/i", $email) or preg_match("/$kata2/i", $email)){
                        if(preg_match("/$kata1/i", $email)){
                            $status="Dosen";
                        }else if(preg_match("/$kata2/i", $email)){
                            $status="Mahasiswa";
                        }
                        //generate simple random code
//                        $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//                        $code = substr(str_shuffle($set), 0, 12);

                        $hashedPassword = password_hash($password, PASSWORD_BCRYPT, array('cost'=>12));
                        $data=array(
                            'username' => $email,
                            'namalengkap' => $namalengkap,
                            'password' => $hashedPassword,
                            'previledges' => 'peneliti',
//                            'verifcode' => $code,
                            'aktivasi' => 'true'
                        );
                        $simpanuser=$this->m_data->simpandatawithconfirm($data, 'user');
                        if($simpanuser){
                            $id = $this->m_data->getLastID('id','user');                        
                            $datapeneliti=array(
                                'nipnim' => $nipnim,
                                'namalengkap' => $namalengkap,
                                'status' => $status,
                                'idprodi' => $idprodi,
                                'iduser' => $id[0]->id
                            );
                            $simpanpeneliti=$this->m_data->simpandatawithconfirm($datapeneliti, 'peneliti');
                            if($simpanpeneliti){
                                //KIRIM EMAIL VERIFIKASI
//                                $this->load->library('email');
//                                $config = array();
//                                $config['charset'] = 'utf-8';
//                                $config['useragent'] = 'Codeigniter';
//                                $config['protocol'] = "smtp";
//                                $config['mailtype'] = "html";
//                                $config['smtp_host'] = "ssl://smtp.gmail.com"; //pengaturan smtp
//                                $config['smtp_port'] = "465";
//                                $config['smtp_timeout'] = "400";
//                                $config['smtp_user'] = "ppm.fsmundip@gmail.com"; // isi dengan email kamu
//                                $config['smtp_pass'] = "@ppmfsmUndip"; // isi dengan password kamu
//                                $config['crlf'] = "\r\n";
//                                $config['newline'] = "\r\n";
//                                $config['wordwrap'] = TRUE;
//                                $message =  "<html>
//                                            <head>
//                                            <title>[Sukses] Aktivasi Akun</title>
//                                            </head>
//                                            <body>
//                                            <h2>Terima kasih telah melakukan Registrasi Akun</h2>
//                                            <p>Klik link berikut untuk melakukan aktivasi akun :</p>
//                                            <h4><a href='".base_url()."index.php/welcome/activate/".$id[0]->id."/".$code."'>Aktivasi Akun Saya</a></h4>
//                                            <br/><br/>
//                                            <b>FAKULTAS SAINS DAN MATEMATIKA UNDIP</b><br/>
//                                            Jalan Prof. Soedarto, SH, Kampus Undip Tembalang Semarang, Jawa Tengah 50275<br/>
//                                            Telp./Fax. (024) 747 4754<br/>
//                                            Email : fsm@undip.ac.id<br/>
//                                            </body>
//                                            </html>
//                                            ";
//
//                                //memanggil library email dan set konfigurasi untuk pengiriman email
//                                $this->email->initialize($config);
//
//                                //konfigurasi pengiriman
//                                $this->email->from($config['smtp_user']);
//                                $this->email->to($email);
//                                $this->email->subject("[Sukses] Aktivasi Akun PPM FSM Undip");
//                                $this->email->message($message);
//                                //notifikasi registrasi berhasil
//                                if ($this->email->send()) {
//                                    $response=1;
//                                } else {
//                                    echo "Eror: ".$mail->ErrorInfo;
//                                }
                                //END 
                                $response=1;
                            }
                        }
                    }else{
                        $response=2;
                    }
                }else{
                    $response=3;
                }
            }else{
                $response=4;
            }
            echo $response;            
        }
    function generate_password(){
        $response=$this->generate(10);
        echo $response;
    }
    function generate($panjang){
        $karakter = '';
        $karakter .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; // karakter alfabet
        $karakter .= '1234567890'; // karakter numerik
        $karakter .= '@#$^*()_+=/?'; // karakter simbol

        $string = '';
        for ($i=0; $i < $panjang; $i++) { 
         $pos = rand(0, strlen($karakter)-1);
         $string .= $karakter{$pos};
        }
        return $string;
    }
         
}
