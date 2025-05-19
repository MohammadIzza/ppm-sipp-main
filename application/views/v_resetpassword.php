<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../../">
		<meta charset="utf-8" />
		<title>Reset Password</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		
		<!--begin::Fonts-->
		<link href=<?php echo base_url() . "dist/assets/css/font.css" ?> rel="stylesheet" type="text/css" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href=<?php echo base_url() . "dist/assets/css/pages/login/classic/login-4.css"?> rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href=<?php echo base_url() . "dist/assets/plugins/global/plugins.bundle.css"?> rel="stylesheet" type="text/css" />
		<link href=<?php echo base_url() . "dist/assets/plugins/custom/prismjs/prismjs.bundle.css"?> rel="stylesheet" type="text/css" />
		<link href=<?php echo base_url() . "dist/assets/css/style.bundle.css"?> rel="stylesheet" type="text/css" />
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
			<div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
				<div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url(<?php echo base_url() . 'dist/assets/media/bg/bg-3.jpg'?>);">
					<div class="login-form text-center p-7 position-relative overflow-hidden">
						<!--begin::Login Header-->
						<div class="d-flex flex-center mb-15">
							<a href="#">
                                                            <img src=<?php echo base_url() . "images/logo-fsm-blue.png"?> class="max-h-75px" alt="" />
							</a>
						</div>
						<!--end::Login Header-->
						<!--begin::Login Sign in form-->
						<div class="login-signin">
							<div class="mb-20">
								<h3>Reset Password</h3>
								<div class="text-muted font-weight-bold">Masukkan kata sandi baru Anda</div>
							</div>
                                                        <form class="form" id="kt_login_signin_form" method="post">
                                                                <input type="hidden" name="id" value="<?php echo $id;?>" required=""/>
								<div class="form-group mb-5">
                                                                    <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Password Baru (Minimal 8 Karakter)" name="password" minlength="8" required=""/>
								</div>
								<div class="form-group mb-5">
                                                                    <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Konfirmasi Password" name="cpassword" minlength="8" required=""/>
								</div>
<!--								<div class="form-group d-flex flex-wrap justify-content-between align-items-center">
									<div class="checkbox-inline">
										<label class="checkbox m-0 text-muted">
										<input type="checkbox" name="remember" />
										<span></span>Remember me</label>
									</div>
									<a href="javascript:;" id="kt_login_forgot" class="text-muted text-hover-primary">Forget Password ?</a>
								</div>-->
								<button id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Sign In</button>
							</form>
<!--							<div class="mt-10">
								<span class="opacity-70 mr-4">Don't have an account yet?</span>
								<a href="javascript:;" id="kt_login_signup" class="text-muted text-hover-primary font-weight-bold">Sign Up!</a>
							</div>-->
						</div>
						<!--end::Login Sign in form-->
						<!--begin::Login Sign up form-->
<!--						<div class="login-signup">
							<div class="mb-20">
								<h3>Sign Up</h3>
								<div class="text-muted font-weight-bold">Enter your details to create your account</div>
							</div>
							<form class="form" id="kt_login_signup_form">
								<div class="form-group mb-5">
                                                                    <input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Fullname" name="fullname" required=""/>
								</div>
								<div class="form-group mb-5">
									<input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" />
								</div>
								<div class="form-group mb-5">
									<input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Password" name="password" />
								</div>
								<div class="form-group mb-5">
									<input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Confirm Password" name="cpassword" />
								</div>
								<div class="form-group mb-5 text-left">
									<div class="checkbox-inline">
										<label class="checkbox m-0">
										<input type="checkbox" name="agree" />
										<span></span>I Agree the
										<a href="#" class="font-weight-bold ml-1">terms and conditions</a>.</label>
									</div>
									<div class="form-text text-muted text-center"></div>
								</div>
								<div class="form-group d-flex flex-wrap flex-center mt-10">
									<button id="kt_login_signup_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Sign Up</button>
									<button id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
								</div>
							</form>
						</div>-->
						<!--end::Login Sign up form-->
						<!--begin::Login forgot password form-->
<!--						<div class="login-forgot">
							<div class="mb-20">
								<h3>Forgotten Password ?</h3>
								<div class="text-muted font-weight-bold">Enter your email to reset your password</div>
							</div>
							<form class="form" id="kt_login_forgot_form">
								<div class="form-group mb-10">
									<input class="form-control form-control-solid h-auto py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" />
								</div>
								<div class="form-group d-flex flex-wrap flex-center mt-10">
									<button id="kt_login_forgot_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Request</button>
									<button id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
								</div>
							</form>
						</div>-->
						<!--end::Login forgot password form-->
					</div>
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
		<script src=<?php echo base_url() . "dist/assets/plugins/global/plugins.bundle.js"?>></script>
		<script src=<?php echo base_url() . "dist/assets/plugins/custom/prismjs/prismjs.bundle.js"?>></script>
		<script src=<?php echo base_url() . "dist/assets/js/scripts.bundle.js"?>></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src=<?php echo base_url() . "dist/assets/js/pages/custom/login/login-general-2.js"?>></script>
		<!--end::Page Scripts-->
                <script type="text/javascript">
            $(document).ready(function(){                
                $('#kt_login_signin_form').on('submit', function (e) {
                    
                    $.ajax({
                        url:'<?php echo base_url() . "index.php/welcome/resetpassword"; ?>', 
                        data:$(this).serialize(),
                        type:'POST',
                        success:function(response){
                            if(response == 1){
                                swal.fire({title: "Berhasil", text: "Reset Password Berhasil, silahkan Login untuk melanjutkan", icon: "success",buttonsStyling:true, confirmButtonText: "OK, Saya Mengerti !"},
                                    ).then(function() {
                                        window.location='<?php echo base_url() . "index.php/welcome/loadpagesignin"; ?>';
                                    });  
                            }else{
                                swal.fire({title: "Oops...", text: "Gagal Reset Password. Pastikan Password mengandung minimal 8 karakter dan Konfirmasi Password sama", icon: "error",buttonsStyling:true, confirmButtonText: "OK, Saya Mengerti !"},
                                ).then(function() {
                                    location.reload();
                                });  
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