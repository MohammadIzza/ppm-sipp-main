<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('m_data');
        }
	public function index()
	{
            if ($this->session->userdata('logged_in')) {
                $_SESSION['menu'] = 'dashboard';  
                $user=$this->session->userdata('logged_in');
                
                $data['periode'] = $this->m_data->getLastID('idperiode','periode');
                $idperiode=$data['periode'][0]->idperiode;
                $data['skema'] = $this->m_data->getTbbycond2("skema", "status='aktif'", "program", "asc");
                
                if($user['previledges']=='admin fakultas'){
                    $data['usulanbaru'] = $this->m_data->countdata('count(idusulan) as jml','usulan',"statususulan='Baru' && idperiode='$idperiode'");
                    $data['usulanfinal'] = $this->m_data->countdata('count(idusulan) as jml','usulan',"(statususulan='Final' or statususulan='Didanai' or statususulan='Tidak didanai') && idperiode='$idperiode'");
                    $data['usulandidanai'] = $this->m_data->countdata('count(idusulan) as jml','usulan',"statususulan='Didanai' && idperiode='$idperiode'");
                    $data['usulanditolak'] = $this->m_data->countdata('count(idusulan) as jml','usulan',"statususulan='Tidak Didanai' && idperiode='$idperiode'");
                }else if($user['previledges']=='admin prodi'){
                    $idprodi=$user['idprodiadmin'];
                    $prodi=$this->m_data->caridata('idprodi',$idprodi,'prodi');
                    $data['namaprodi'] = $prodi->namaprodi;
                    $data['usulanbaru'] = $this->m_data->countdata('count(idusulan) as jml','usulan',"statususulan='Baru' && idperiode='$idperiode' && idusulan in(select idusulan from usulananggota where nipnim in(select nipnim from peneliti where idprodi='$idprodi'))");
                    $data['usulanfinal'] = $this->m_data->countdata('count(idusulan) as jml','usulan',"(statususulan='Final' or statususulan='Didanai' or statususulan='Tidak didanai') && idperiode='$idperiode' && idusulan in(select idusulan from usulananggota where nipnim in(select nipnim from peneliti where idprodi='$idprodi'))");
                    $data['usulandidanai'] = $this->m_data->countdata('count(idusulan) as jml','usulan',"statususulan='Didanai' && idperiode='$idperiode' && idusulan in(select idusulan from usulananggota where  nipnim in(select nipnim from peneliti where idprodi='$idprodi'))");
                    $data['usulanditolak'] = $this->m_data->countdata('count(idusulan) as jml','usulan',"statususulan='Tidak Didanai' && idperiode='$idperiode' && idusulan in(select idusulan from usulananggota where nipnim in(select nipnim from peneliti where idprodi='$idprodi'))");
                }                
                
                $this->load->view('v_home',$data);
            }else{
                if(isset($_SESSION['search'])){
                    unset($_SESSION['search']);
                } 
                
                $this->load->library('pagination');
                $config['base_url'] = base_url() . 'index.php/welcome/index/';
                $config['total_rows'] = $this->db->query("select * from pengumuman order by tglpos")->num_rows();
                $config['per_page'] = "3";
                $config["uri_segment"] = 3;
                $choice = $config["total_rows"] / $config["per_page"];
                $config["num_links"] = floor($choice);
    //***********config for bootstrap pagination class integration
                $config['num_links'] = 2;
                $config['full_tag_open'] = '<ul class="pagination">';
                $config['full_tag_close'] = '</ul>';
                $config['first_link'] = 'First';
                $config['last_link'] = 'Last';
                $config['first_tag_open'] = '<li>';
                $config['first_tag_close'] = '</li>';
                $config['prev_link'] = '&laquo';
                $config['prev_tag_open'] = '<li class="prev">';
                $config['prev_tag_close'] = '</li>';
                $config['next_link'] = '&raquo';
                $config['next_tag_open'] = '<li>';
                $config['next_tag_close'] = '</li>';
                $config['last_tag_open'] = '<li>';
                $config['last_tag_close'] = '</li>';
                $config['cur_tag_open'] = '<li class="active"><a href="#">';
                $config['cur_tag_close'] = '</a></li>';
                $config['num_tag_open'] = '<li>';
                $config['num_tag_close'] = '</li>';

                $this->pagination->initialize($config);
                $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

                //call the model function to get the department data

                $data['pengumuman'] = $this->m_data->getPengumuman($config["per_page"], $data['page']);
                $data['pagination'] = $this->pagination->create_links();

                $this->load->view('v_welcome',$data);
            }
	}
        function caripengumuman(){
            // Escape special characters, if any
            $kata_kunci_awal=$this->input->post('katakunci');
            $kata_kunci = mysqli_real_escape_string($this->db->conn_id,$kata_kunci_awal);
            if ($kata_kunci != ''){
                $_SESSION['search'] = $kata_kunci;
                $_SESSION['search_awal'] = $kata_kunci_awal;
            }
//            else{
//                $_SESSION['search']='';
//            }
            $where1 = "";
            $where2 = "";

            //membuat variabel $kata_kunci_split untuk memecah kata kunci setiap ada spasi
            $kata_kunci_split = preg_split('/[\s]+/', $_SESSION['search']);
            //menghitung jumlah kata kunci dari split di atas
            $total_kata_kunci = count($kata_kunci_split);

            //melakukan perulangan sebanyak kata kunci yang di masukkan
            foreach ($kata_kunci_split as $key => $kunci) {
                //set variabel $where untuk query nanti
                $where1 .= "judul LIKE '%$kunci%'";
                //jika kata kunci lebih dari 1 (2 dan seterusnya) maka di tambahkan OR di perulangannya
                if ($key != ($total_kata_kunci - 1)) {
                    $where1 .= " OR ";
                }
            }
            foreach ($kata_kunci_split as $key => $kunci) {
                //set variabel $where untuk query nanti
                $where2 .= "isi LIKE '%$kunci%'";
                //jika kata kunci lebih dari 1 (2 dan seterusnya) maka di tambahkan OR di perulangannya
                if ($key != ($total_kata_kunci - 1)) {
                    $where2 .= " OR ";
                }
            }
            
            //pagination settings
            $this->load->library('pagination');
            $config['base_url'] = base_url().'index.php/welcome/caripengumuman/';
            $config['total_rows'] = $this->db->query("SELECT * FROM pengumuman WHERE ( $where1 or $where2  ) order by idpengumuman desc")->num_rows();
            $config['per_page'] = "4";
            $config["uri_segment"] = 3;
            $choice = $config["total_rows"] / $config["per_page"];
            $config["num_links"] = floor($choice);

            //config for bootstrap pagination class integration
            $config['num_links'] = 2;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_link'] = 'First';
            $config['last_link'] = 'Last';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['prev_link'] = '&laquo';
            $config['prev_tag_open'] = '<li class="prev">';
            $config['prev_tag_close'] = '</li>';
            $config['next_link'] = '&raquo';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';

            $this->pagination->initialize($config);
            $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

            //call the model function to get the department data
            $data['pengumuman'] = $this->m_data->caripengumuman($config["per_page"], $data['page'], $where1, $where2);
            $data['pagination'] = $this->pagination->create_links();
            $data['kata_kunci'] = $_SESSION['search_awal'];
            $data['jmldata'] = $config['total_rows'];
 
            $this->load->view('v_welcome',$data);
        } 
        
        function download(){
            $data['file'] = $this->m_data->getTbbycond2("pengumumanlampiran, pengumuman", "pengumumanlampiran.idpengumuman=pengumuman.idpengumuman", "pengumumanlampiran.id", "desc");
            $this->load->view('v_welcome_download',$data);
        }
        
        function loadpagesignin()
	{
            $data['prodi']=$this->m_data->getAllbyorder('namaprodi','asc','prodi');
            $this->load->view('v_loginpage',$data);
	}
        function register() {
            $response=0;
            $email = strtolower(mysqli_real_escape_string($this->db->conn_id,$this->input->post('email')));
            $nipnim = mysqli_real_escape_string($this->db->conn_id,$this->input->post('nipnim'));
            $namalengkap = mysqli_real_escape_string($this->db->conn_id,$this->input->post('namalengkap'));
            $idprodi = mysqli_real_escape_string($this->db->conn_id,$this->input->post('idprodi'));
            $password = mysqli_real_escape_string($this->db->conn_id,$this->input->post('password'));
            $cpassword = mysqli_real_escape_string($this->db->conn_id,$this->input->post('cpassword'));
            
            $user=$this->m_data->caridata('username',$email,'user');
            $peneliti=$this->m_data->caridata('nipnim',$nipnim,'peneliti');
            
            $kata1="lecturer.undip.ac.id";
            $kata2="students.undip.ac.id";
//            $kata2="gmail.com";
            
            if(empty($user) && empty($peneliti)){
                if(strlen($nipnim)>=14){
                    if($password==$cpassword){
                        if(preg_match("/$kata1/i", $email) or preg_match("/$kata2/i", $email)){
                            if(preg_match("/$kata1/i", $email)){
                                $status="Dosen";
                            }else if(preg_match("/$kata2/i", $email)){
                                $status="Mahasiswa";
                            }
                            //generate simple random code
                            $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                            $code = substr(str_shuffle($set), 0, 12);

                            $hashedPassword = password_hash($password, PASSWORD_BCRYPT, array('cost'=>12));
                            $data=array(
                                'username' => $email,
                                'namalengkap' => $namalengkap,
                                'password' => $hashedPassword,
                                'previledges' => 'peneliti',
                                'verifcode' => $code,
                                'aktivasi' => 'false'
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
                                    $this->load->library('email');
                                    $config = array();
                                    $config['charset'] = 'utf-8';
                                    $config['useragent'] = 'Codeigniter';
                                    $config['protocol'] = "smtp";
                                    $config['mailtype'] = "html";
                                    $config['smtp_host'] = "ssl://smtp.gmail.com"; //pengaturan smtp
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
                                                <h2>Terima kasih telah melakukan Registrasi Akun</h2>
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
            }else{
                $response=5;
            }
            echo $response;            
        }
        
        function activate(){
            $id = $this->uri->segment(3);
            $code = $this->uri->segment(4);
            //fetch user details
            $user = $this->m_data->caridata('id',$id,'user');
            if($user->aktivasi=='false'){
                //if code matches
                if ($user->verifcode == $code) {
                    //update user active status
                    $data=array(
                        'aktivasi' => 'true'
                    );
                    $query = $this->m_data->updatedata('id',$id,$data,'user');

                    if ($query) {
                        if($user->previledges=='admin prodi'){
                            $sess_array = array(
                                'username' => $user->username,
                                'name' => $user->namalengkap,
                                'previledges' => $user->previledges,
                                'idprodiadmin' => $user->idprodiadmin,
                                'iduser' => $user->id
                            );
                        }else{
                           $sess_array = array(
                                'username' => $user->username,
                                'name' => $user->namalengkap,
                                'previledges' => $user->previledges,
                                'iduser' => $user->id
                            ); 
                        }
                        
                        $this->session->set_userdata('logged_in', $sess_array);
                        
                        $pesan['msg1']="Aktivasi Akun Berhasil";
                        $pesan['msg2']="Silahkan menuju <a href='".base_url()."'>Dashboard</a>";

                        $this->load->view('error-msg-1',$pesan);              
                    } else {
                        $pesan['highlight']="Aktivasi Akun Gagal";
                        $pesan['msg1']="Kesalahan dalam proses aktivasi Akun";
                        $pesan['msg2']="Kembali ke <a href='".base_url()."'>Beranda</a>";

                        $this->load->view('error-msg-2',$pesan);
                    }
                } else {
                    $pesan['highlight']="Aktivasi Akun Gagal";
                    $pesan['msg1']="Kode Aktivasi tidak cocok";
                    $pesan['msg2']="Kembali ke <a href='".base_url()."'>Beranda</a>";

                    $this->load->view('error-msg-2',$pesan);
                }
            }else{
                $pesan['highlight']="Terjadi Kesalahan";
                $pesan['msg1']="Akun Anda telah aktif. Silahkan <b>Login</b> untuk melanjutkan";
                $pesan['msg2']="Kembali ke <a href='".base_url()."'>Beranda</a>";

                $this->load->view('error-msg-2',$pesan);
            }
            
        }

    function login(){
            $response = 0;
            $username = mysqli_real_escape_string($this->db->conn_id,$this->input->post('username'));
            $password = mysqli_real_escape_string($this->db->conn_id,$this->input->post('password'));
            
            $result = $this->m_data->caridata('username',$username,'user');
            if(!empty($result)){
                if($result->aktivasi=="true"){
                    if(password_verify($password,$result->password) && $result->aktivasi=="true"){
                        if($result->previledges=='admin prodi'){
                            $sess_array = array(
                                'username' => $result->username,
                                'name' => $result->namalengkap,
                                'previledges' => $result->previledges,
                                'idprodiadmin' => $result->idprodiadmin,
                                'iduser' => $result->id
                            );
                        }else{
                            $sess_array = array(
                                'username' => $result->username,
                                'name' => $result->namalengkap,
                                'previledges' => $result->previledges,
                                'iduser' => $result->id
                            );                            
                        }
                        $this->session->set_userdata('logged_in', $sess_array);
                        $response = 1;
                    }else{
                        $response = 2;
                    } 
                }else{
                    $response = 3;
                }
                   
            }else{
                $response = 4;
            }
            echo $response; 
        }
        
        public function lupapassword() {
            $response=0;
            $email = mysqli_real_escape_string($this->db->conn_id,$this->input->post('email'));
            $user=$this->m_data->caridata('username',$email,'user');
            
            if(empty($user)){
                $response=2;
            } else {
                $nama=ucwords(strtolower($user->namalengkap));
                $token=mt_rand(100000, 999999);
                
                $this->load->library('email');
                $config = array();
                $config['charset'] = 'utf-8';
                $config['useragent'] = 'Codeigniter';
                $config['protocol'] = "smtp";
                $config['mailtype'] = "html";
                $config['smtp_host'] = "ssl://smtp.gmail.com"; //pengaturan smtp
                $config['smtp_port'] = "465";
                $config['smtp_timeout'] = "400";
                $config['smtp_user'] = "ppm.fsmundip@gmail.com"; // isi dengan email kamu
                $config['smtp_pass'] = "@ppmfsmUndip"; // isi dengan password kamu
                $config['crlf'] = "\r\n";
                $config['newline'] = "\r\n";
                $config['wordwrap'] = TRUE;
                $message = "Hi, <b>$nama</b>.<br/><br/>
                            Kami menerima permintaan untuk mengatur ulang kata sandi Akun anda.<br/>
                            Jika itu benar anda, silahkan klik link berikut :<br/>
                            <h4><a href='".base_url()."index.php/welcome/recover/".$user->id."/".$token."'>Reset Password Saya</a></h4>
                            
                            <br/><br/>
                            <b>FAKULTAS SAINS DAN MATEMATIKA UNDIP</b><br/>
                            Jalan Prof. Soedarto, SH, Kampus Undip Tembalang Semarang, Jawa Tengah 50275<br/>
                            Telp./Fax. (024) 747 4754<br/>
                            Email : fsm@undip.ac.id<br/>
                            ";
                
                //memanggil library email dan set konfigurasi untuk pengiriman email
                $this->email->initialize($config);

                //konfigurasi pengiriman
                $this->email->from($config['smtp_user']);
                $this->email->to($email);
                $this->email->subject("[Sukses] Reset Password Aplikasi PPM FSM Undip");
                $this->email->message($message);
                //notifikasi registrasi berhasil
                if ($this->email->send()) {
                    $data=array(
                        'token' => $token
                    );
                    $query = $this->m_data->updatedata('username',$email,$data,'user');
                    
                    $response=1;
                } else {
//                    echo "Eror: ".$this->email->ErrorInfo; 
                    echo show_error($this->email->print_debugger());
                }
            }
            echo $response;
        }
        
        function recover(){
            $id = $this->uri->segment(3);
            $token = $this->uri->segment(4);
            $data['id'] = $id;
            $data['token'] = $token;
            $result = $this->m_data->cariMultidata($data,'user');
            if(!empty($result)){
                $this->load->view('v_resetpassword',$data);
            }else{
                $pesan['highlight']="Link Reset Password tidak dapat digunakan";
                $pesan['msg1']="Klik <b>Lupa Password</b> kembali untuk mendapatkan Email Reset Password Baru";
                $pesan['msg2']="Kembali ke <a href='".base_url()."'>Beranda</a>";
                
                $this->load->view('error-msg-2',$pesan);
            }
            
        }
        function resetpassword(){
            $response=0;
            $id = $this->input->post('id');
            $password = $this->input->post('password');
            $cpassword = $this->input->post('cpassword');
            if($password==$cpassword && strlen($password)>=8){
                $hashedPassword = password_hash($password, PASSWORD_BCRYPT, array('cost'=>12));
                $data=array(
                    'password' => $hashedPassword,
                    'token' => "" //clear token after success reset password
                );
                $query = $this->m_data->updatedata('id',$id,$data,'user');
                if ($query) {
                    $response=1;
                }
            }
            
            echo $response;
        } 
        function logout() {
            $this->session->unset_userdata('logged_in');
            session_destroy();
            redirect('welcome', 'refresh');
        }
        

}
