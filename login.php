<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script> -->
    <title>Login</title>

    <!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="https://preview.keenthemes.com/metronic/theme/html/demo8/dist/assets/css/pages/login/login-1.css?v=7.rtl.css" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="https://preview.keenthemes.com/metronic/theme/html/demo8/dist/assets/plugins/global/plugins.bundle.css?v=7.rtl.css" rel="stylesheet" type="text/css" />
		<link href="https://preview.keenthemes.com/metronic/theme/html/demo8/dist/assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.rtl.css" rel="stylesheet" type="text/css" />
		<link href="https://preview.keenthemes.com/metronic/theme/html/demo8/dist/assets/css/style.bundle.css?v=7.rtl.css" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="https://preview.keenthemes.com/metronic/theme/html/demo8/dist/assets/media/logos/favicon.ico" />
		<!-- Hotjar Tracking Code for keenthemes.com -->
		<script>(function(h,o,t,j,a,r){ h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)}; h._hjSettings={hjid:1070954,hjsv:6}; a=o.getElementsByTagName('head')[0]; r=o.createElement('script');r.async=1; r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv; a.appendChild(r); })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');</script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async="async" src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
		<script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'UA-37564768-1');</script>
</head>
<body>

<!--begin::Main-->
<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
				<!--begin::Aside-->
				<div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #F2C98A;">
					<!--begin::Aside Top-->
					<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
						<!--begin::Aside header-->
						<!-- <a href="#" class="text-center mb-10">
							<img src="https://preview.keenthemes.com/metronic/theme/html/demo8/dist/assets/media/logos/logo-letter-1.png" class="max-h-70px" alt="" />
						</a> -->
						<!--end::Aside header-->
						<!--begin::Aside title-->
						<h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg" style="color: #986923;">Aplikasi Capaian Net Margin
						<br /> Kepala Tim
						</h3>
						<!--end::Aside title-->
					</div>
					<!--end::Aside Top-->
					<!--begin::Aside Bottom-->
					<div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(/metronic/theme/html/demo8/dist/assets/media/svg/illustrations/login-visual-1.svg)"></div>
					<!--end::Aside Bottom-->
				</div>
				<!--begin::Aside-->
				<!--begin::Content-->
				<div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
					<!--begin::Content body-->
					<div class="d-flex flex-column-fluid flex-center">
						<!--begin::Signin-->
						<div class="login-form login-signin">
							<!--begin::Form-->
                            <div  id="kt_login_signin_form">
							<form class="form" action="akses/akseslogin.php" method="post" novalidate="novalidate">
								<!--begin::Title-->
								<div class="pb-13 pt-lg-0 pt-5">
									<h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Selamat Datang</h3>
									<span class="text-muted font-weight-bold font-size-h4">Baru disini? 
									<a href="javascript:;" id="kt_login_signup" class="text-primary font-weight-bolder">Buat Akun</a></span>
								</div>
								<!--begin::Title-->
								<!--begin::Form group-->
								<div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">Username</label>
									<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="text" name="username" autocomplete="off" />
								</div>
								<!--end::Form group-->
								<!--begin::Form group-->
								<!-- <div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">Email</label>
									<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="text" name="email" autocomplete="off" />
								</div> -->
								<!--end::Form group-->
								<!--begin::Form group-->
								<div class="form-group">
									<div class="d-flex justify-content-between mt-n5">
										<label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
										<!-- <a href="javascript:;" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot">Lupa Password ?</a> -->
									</div>
									<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="password" name="password" autocomplete="off" />
								</div>
								<!--end::Form group-->
								<!--begin::Action-->
								<div class="pb-lg-0 pb-5">
									<button type="submit" name="login" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Login</button>
								</div>
							</form>
                            </div>
								<!--end::Action-->
							<!--end::Form-->
						</div>
						<!--end::Signin-->
						<!--begin::Signup-->
						<div class="login-form login-signup">
							<!--begin::Form-->
                            <div id="kt_login_signup_form">
							<form class="form" action="akses/aksesregister.php" method="post" novalidate="novalidate">
								<!--begin::Title-->
								<div class="pb-13 pt-lg-0 pt-5">
									<h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Daftar Akun</h3>
									<p class="text-muted font-weight-bold font-size-h4">Enter your details to create your account</p>
								</div>
								<!--end::Title-->
								<!--begin::Form group-->
								<div class="form-group">
									<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="text" id="input" placeholder="Nama Lengkap" name="name" autocomplete="off" />
								</div>
								<!--end::Form group-->
								<!--begin::Form group-->
								<div class="form-group">
									<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="text" placeholder="Username" name="username" autocomplete="off" />
								</div>
								<!--end::Form group-->
								<!--begin::Form group-->
								<div class="form-group">
									<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" autocomplete="off" />
								</div>
								<!--end::Form group-->
								<!--begin::Form group-->
								<div class="form-group">
									<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="password" placeholder="Password" name="password" autocomplete="off" />
								</div>
								<!--end::Form group-->
								<!--begin::Form group-->
								<div class="form-group">
									<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="password" placeholder="Confirm password" name="password" autocomplete="off" />
								</div>
								<!--end::Form group-->
								<!--begin::Form group-->
								<div class="form-group">
									<label class="checkbox mb-0">
									<input type="checkbox" name="agree" />I Agree the<a href="#">terms and conditions</a>. 
									<span></span></label>
								</div>
								<!--end::Form group-->
								<!--begin::Form group-->
								<div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
									<input type="submit" name="register" value="Daftar" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">
									<button type="button" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</button>
								</div>
								<!--end::Form group-->
							</form>
                            </div>
							<!--end::Form-->
						</div>
						<!--end::Signup-->
						<!--begin::Forgot-->
						<div class="login-form login-forgot">
							<!--begin::Form-->
							<form class="form" novalidate="novalidate" id="kt_login_forgot_form">
								<!--begin::Title-->
								<div class="pb-13 pt-lg-0 pt-5">
									<h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Forgotten Password ?</h3>
									<p class="text-muted font-weight-bold font-size-h4">Enter your email to reset your password</p>
								</div>
								<!--end::Title-->
								<!--begin::Form group-->
								<div class="form-group">
									<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" autocomplete="off" />
								</div>
								<!--end::Form group-->
								<!--begin::Form group-->
								<div class="form-group d-flex flex-wrap pb-lg-0">
									<button type="button" id="kt_login_forgot_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>
									<button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</button>
								</div>
								<!--end::Form group-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Forgot-->
					</div>
					<!--end::Content body-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#8950FC", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#EEE5FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="https://preview.keenthemes.com/metronic/theme/html/demo8/dist/assets/plugins/global/plugins.bundle.js?v=7.0.6"></script>
		<script src="https://preview.keenthemes.com/metronic/theme/html/demo8/dist/assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
		<script src="https://preview.keenthemes.com/metronic/theme/html/demo8/dist/assets/js/scripts.bundle.js?v=7.0.6"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="https://preview.keenthemes.com/metronic/theme/html/demo8/dist/assets/js/pages/custom/login/login-general.js?v=7.0.6"></script>
		<!--end::Page Scripts-->

</body>

<script type="text/javascript">
	function validasi() {
		var email = document.getElementById("email").value;
		var password = document.getElementById("password").value;		
		if (email != "" && password!="") {
			return true;
		}else{
			alert('Email dan Password harus di isi !');
			return false;
		}
    };
    $(function() { 
        $('#input').keyup(function() { 
            this.value = this.value.toLowerCase().split(' ').map(s => s.charAt(0).toUpperCase() + s.substring(1)).join(' '); 
        }); 
    }); 
 
</script>
</html>