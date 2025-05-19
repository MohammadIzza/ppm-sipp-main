<html lang="en">
    <!--begin::Head-->
    <head><base href="../../../../">
        <meta charset="utf-8" />
        <title>PPM-Apps FSM</title>
        <meta name="description" content="Login page example" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <!--begin::Fonts-->
        <link href=<?php echo base_url() . "dist/assets/css/font.css" ?> rel="stylesheet" type="text/css" />
        <!--end::Fonts-->
        <!--begin::Page Custom Styles(used by this page)-->
        <link href=<?php echo base_url() . "dist/assets/css/pages/login/classic/login-6.css"?> rel="stylesheet" type="text/css" />
        <!--end::Page Custom Styles-->
        <!--begin::Global Theme Styles(used by all pages)-->
        <link href=<?php echo base_url() . "dist/assets/plugins/global/plugins.bundle.css?v=7.2.8" ?> rel="stylesheet" type="text/css" />
        <link href=<?php echo base_url() . "dist/assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.2.8" ?> rel="stylesheet" type="text/css" />
        <link href=<?php echo base_url() . "dist/assets/css/style.bundle.css?v=7.2.8" ?> rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles-->
        <!--begin::Layout Themes(used by all pages)-->
        <!--end::Layout Themes-->
        <link rel="shortcut icon" href=<?php echo base_url() . "images/favicon-undip.ico"?> />
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" style="background-image: url(<?php echo base_url() . 'dist/assets/media/bg/bg-10.jpg'?>)" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
        <?php include 'loader.php'; ?>
        <!--begin::Main-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Login-->
            <div class="login login-6 login-signin-on login-signin-on d-flex flex-column-fluid" id="kt_login">
                <div class="d-flex flex-column flex-lg-row flex-row-fluid text-center" style="background-image: url(<?php echo base_url() . 'dist/assets/media/bg/bg-3.jpg'?>);">
                    <!--begin:Aside-->
                    <div class="d-flex w-100 flex-center p-15">
                        <div class="login-wrapper">
                            <!--begin:Aside Content-->
                            <div class="text-dark-75">
                                <a href="<?php echo base_url() . "index.php/" ?>">
                                    <img src=<?php echo base_url() . "images/logo-fsm-blue.png"?> class="max-h-75px" alt="" />
                                </a>
                                <h3 class="mb-8 mt-22 font-weight-bold">PENDAFTARAN AKUN</h3>
                                <p class="mb-15 text-muted font-weight-bold">Bagi para peneliti baik Dosen atau Mahasiswa <br/>Fakultas Sains dan Matematika, silahkan mendaftar akun menggunakan User ID: email SSO Anda (Lecturer/Students)</p>
                                <button type="button" id="kt_login_signup" class="btn btn-outline-primary btn-pill py-4 px-9 font-weight-bold">Mulai Pendaftaran</button>
                            </div>
                            <!--end:Aside Content-->
                        </div>
                    </div>
                    <!--end:Aside-->
                    <!--begin:Divider-->
                    <div class="login-divider">
                        <div></div>
                    </div>
                    <!--end:Divider-->
                    <!--begin:Content-->
                    <div class="d-flex w-100 flex-center p-15 position-relative overflow-hidden">
                        <div class="login-wrapper">
                            <!--begin:Sign In Form-->
                            <div class="login-signin">
                                <div class="text-center mb-10 mb-lg-20">
                                    <h2 class="font-weight-bold">SIGN IN</h2>
                                    <p class="text-muted font-weight-bold">Masukkan Username dan Password Anda</p>
                                </div>
                                <form class="form text-left" id="kt_login_signin_form" method="post">
                                    <div class="form-group py-2 m-0">
                                        <input class="form-control h-auto border-0 px-0 placeholder-dark-25" type="text" placeholder="Username (Email)" name="username" autocomplete="off" required=""/>
                                    </div>
                                    <div class="form-group py-2 border-top m-0">
                                        <input class="form-control h-auto border-0 px-0 placeholder-dark-25" type="Password" placeholder="Password" name="password" required=""/>
                                    </div>
                                    <div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-5">
                                        <div class="checkbox-inline">
                                            <!--<label class="checkbox m-0 text-muted font-weight-bold">-->
<!--                                                <input type="checkbox" name="remember" />
                                                <span></span>Remember me</label>-->
                                        </div>
                                        <a href="javascript:;" id="kt_login_forgot" class="text-muted text-hover-primary font-weight-bold"><b>Anda Lupa Password ?</b></a>
                                    </div>
                                    <div class="text-center mt-15">
                                        <button id="kt_login_signin_submit" class="btn btn-primary btn-pill shadow-sm py-4 px-9 font-weight-bold">Masuk</button>
                                    </div>
                                </form>
                            </div>
                            <!--end:Sign In Form-->
                            <!--begin:Sign Up Form-->
                            <div class="login-signup">
                                <div class="text-center mb-10 mb-lg-20">
                                    <h3 class="">Daftar Akun</h3>
                                    <p class="text-muted font-weight-bold">Masukkan informasi Anda untuk membuat akun peneliti</p>
                                </div>
                                <form class="form text-left" id="kt_login_signup_form" method="post">
                                <!--<form class="form text-left" method="post" action="<?php echo base_url() . "index.php/welcome/register"; ?>">-->
                                    <div class="form-group py-2 m-0">
                                        <input class="form-control h-auto border-0 px-0 placeholder-dark-25" type="text" placeholder="NIP (bagi Dosen) / NIM (bagi mahasiswa)" name="nipnim"  required=""/>
                                    </div>
                                    <div class="form-group py-2 m-0">
                                        <input class="form-control h-auto border-0 px-0 placeholder-dark-25" type="text" placeholder="Nama Lengkap Tanpa Gelar" name="namalengkap"  required=""/>
                                    </div>
                                    <div class="form-group py-2 m-0 border-top">
                                        <input class="form-control h-auto border-0 px-0 placeholder-dark-25" type="text" placeholder="Email SSO Anda (lecturer/students)" name="email" autocomplete="off"  required=""/>
                                    </div>                                    
                                    <div class="form-group py-2 m-0">
                                        <select name="idprodi" class="form-control h-auto border-0 px-0 placeholder-dark-25" style="font-weight:50;color:#858585" required="">
                                            <option value="" style="font-weight: light">Pilih Program Studi</option>
                                            <?php
                                            if ($prodi != null) {
                                                foreach ($prodi as $data) :
                                                    ?> 
                                            <option value="<?php echo $data->idprodi; ?>"><?php echo $data->namaprodi; ?></option>
                                                    <?php endforeach;
                                                } ?>
                                        </select>
                                    </div>
                                    <div class="form-group py-2 m-0 border-top">
                                        <input class="form-control h-auto border-0 px-0 placeholder-dark-25" type="password" placeholder="Password Minimal 8 Karakter" name="password" minlength="8" required=""/>
                                    </div>
                                    <div class="form-group py-2 m-0 border-top">
                                        <input class="form-control h-auto border-0 px-0 placeholder-dark-25" type="password" placeholder="Konfirmasi Password" name="cpassword"  minlength="8" required="" />
                                    </div>
<!--                                    <div class="form-group mt-5">
                                        <div class="checkbox-inline">
                                            <label class="checkbox checkbox-outline font-weight-bold">
                                                <input type="checkbox" name="agree" />
                                                <span></span>I Agree the
                                                <a href="#" class="ml-1">terms and conditions</a>.</label>
                                        </div>
                                    </div>-->
                                    <div class="form-group d-flex flex-wrap flex-center">
                                        <button id="kt_login_signup_submit" class="btn btn-primary btn-pill font-weight-bold px-9 py-4 my-3 mx-2">Kirim</button>
                                        <button id="kt_login_signup_cancel" class="btn btn-outline-primary btn-pill font-weight-bold px-9 py-4 my-3 mx-2">Batal</button>
                                    </div>
                                </form>
                            </div>
                            <!--end:Sign Up Form-->
                            <!--begin:Forgot Password Form-->
                            <div class="login-forgot">
                                <div class="text-center mb-10 mb-lg-20">
                                    <h3 class="">Lupa Password ?</h3>
                                    <p class="text-muted font-weight-bold">Masukkan email Anda untuk reset password</p>
                                </div>
                                <form class="form text-left" id="kt_login_forgot_form" method="post">
                                    <div class="form-group py-2 m-0 border-bottom">
                                        <input class="form-control h-auto border-0 px-0 placeholder-dark-25" type="text" placeholder="Email Terdaftar" name="email" autocomplete="off" />
                                    </div>
                                    <div class="form-group d-flex flex-wrap flex-center mt-10">
                                        <button id="kt_login_forgot_submit" class="btn btn-primary btn-pill font-weight-bold px-9 py-4 my-3 mx-2">Kirim</button>
                                        <button id="kt_login_forgot_cancel" class="btn btn-outline-primary btn-pill font-weight-bold px-9 py-4 my-3 mx-2">Batal</button>
                                    </div>
                                </form>
                            </div>
                            <!--end:Forgot Password Form-->
                        </div>
                    </div>
                    <!--end:Content-->
                </div>
            </div>
            <!--end::Login-->
        </div>
        <!--end::Main-->
        <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
        <!--end::Global Config-->
        <!--begin::Global Theme Bundle(used by all pages)-->
        <script src=<?php echo base_url() . "dist/assets/plugins/global/plugins.bundle.js?v=7.2.8";?>></script>
        <script src=<?php echo base_url() . "dist/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.2.8";?>></script>
        <script src=<?php echo base_url() . "dist/assets/js/scripts.bundle.js?v=7.2.8";?>></script>
        <!--end::Global Theme Bundle-->
        <!--begin::Page Scripts(used by this page)-->
        <script src=<?php echo base_url() . "dist/assets/js/pages/custom/login/login-general.js"?>></script>
        <!--end::Page Scripts-->
        <script type="text/javascript">
            $(document).ready(function(){
                $('#kt_login_signup_form').on('submit', function (e) {
                    $.ajax({
                        url:'<?php echo base_url() . "index.php/welcome/register"; ?>', 
                        data:$(this).serialize(),
                        type:'POST',
                        success:function(response){
                            if(response == 1){
                                swal.fire({title: "Berhasil", text: "Pendaftaran akun berhasil. \nSilahkan cek email untuk Aktivasi Akun.", icon: "success",buttonsStyling:true, confirmButtonText: "OK, Saya Mengerti !"},
                                    ).then(function() {
                                        window.location='<?php echo base_url() . "index.php"; ?>';
                                });
                            }else if(response == 2){
                                swal.fire({title: "Oops...", text: "Pendaftaran gagal. \nAnda mungkin menggunakan Email selain yang diperbolehkan. Gunakan email SSO Undip.", icon: "error",buttonsStyling:true, confirmButtonText: "OK, Saya Mengerti !"},
                                );  
                            }else if(response == 3){
                                swal.fire({title: "Oops...", text: "Password tidak cocok, periksa kembali Password dan Konfirmasi Password Anda", icon: "error",buttonsStyling:true, confirmButtonText: "OK, Saya Mengerti !"},
                                ); 
                            }else if(response == 4){
                                swal.fire({title: "Oops...", text: "NIP/NIM tidak valid, periksa kembali isian NIP/NIM Anda. Pastikan Anda memasukkan NIP (bagi Dosen) atau NIM (bagi Mahasiswa)", icon: "error",buttonsStyling:true, confirmButtonText: "OK, Saya Mengerti !"},
                                );    
                            }else{
                                swal.fire({title: "Oops...", text: "Pendaftaran gagal. \nEmail atau NIP/NIM tersebut telah terdaftar, silahkan LOGIN untuk melanjutkan atau pilih Lupa Password untuk melakukan reset password.", icon: "error",buttonsStyling:true, confirmButtonText: "OK, Saya Mengerti !"},
                                ).then(function() {
                                        location.reload();
                                });
                            }
                            
                        }

                      });
                      e.preventDefault(); 
                });
                
                $('#kt_login_signin_form').on('submit', function (e) {
                    $.ajax({
                        url:'<?php echo base_url() . "index.php/welcome/login"; ?>', 
                        data:$(this).serialize(),
                        type:'POST',
                        success:function(response){
                            if(response == 1){
                                swal.fire({title: "Berhasil", text: "Silahkan masuk untuk melanjutkan.", icon: "success",buttonsStyling:true, confirmButtonText: "OK, Saya Mengerti !"},
                                   ).then(function() {
                                        window.location='<?php echo base_url() . "index.php"; ?>';
                                });
                            }else if(response == 2){                               
                                swal.fire({title: "Oops...", text: "Kombinasi username dan password salah.\nKlik lupa password untuk melakukan reset password.", icon: "error",buttonsStyling:true, confirmButtonText: "OK, Saya Mengerti !"},
                                ); 
                            }else if(response == 3){
                                swal.fire({title: "Oops...", text: "Akun Anda belum aktif. Silahkan aktivasi Akun melalui link yang terkirim pada email Anda", icon: "error",buttonsStyling:true, confirmButtonText: "OK, Saya Mengerti !"},
                                ).then(function() {
                                        location.reload();
                                });
                            }else{
                                swal.fire({title: "Oops...", text: "Email anda tidak terdaftar dalam sistem kami, silahkan buat akun terlebih dahulu.", icon: "error",buttonsStyling:true, confirmButtonText: "OK, Saya Mengerti !"},
                                ).then(function() {
                                        location.reload();
                                });
                            }

                        }

                      });
                      e.preventDefault(); 
                });
                
                $('#kt_login_forgot_form').on('submit', function (e) {
                    $.ajax({
                        url:'<?php echo base_url() . "index.php/welcome/lupapassword"; ?>', 
                        data:$(this).serialize(),
                        type:'POST',
                        success:function(response){
                            if(response == 1){
                                swal.fire({title: "Email Terkirim", text: "Silahkan cek email Anda untuk melakukan reset password.", icon: "success",buttonsStyling:true, confirmButtonText: "OK, Saya Mengerti !"},
                                    ).then(function() {
                                        window.location='<?php echo base_url() . "index.php"; ?>';
                                });
                            }else if(response == 2){
                                swal.fire({title: "Oops...", text: "Email Anda belum terdaftar pada sistem.", icon: "error",buttonsStyling:true, confirmButtonText: "OK, Saya Mengerti !"},
                                ); 
                            }else{
                                swal.fire({title: "Oops...", text: "Gagal mengirim email.", icon: "error",buttonsStyling:true, confirmButtonText: "OK, Saya Mengerti !"},
                                ); 
                            }

                        }

                      });
                      e.preventDefault(); 
                });
            });
        
        </script>
    </body>
    <!--end::Body-->
</html>