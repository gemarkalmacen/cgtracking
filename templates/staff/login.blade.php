
<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../../">
		<meta charset="utf-8" />
		<title>{{ __('staff/titles.login_head') }}</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="{{ url('staff/assets/css/pages/login/classic/login-1.css?v=7.0.3') }}" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{ url('staff/assets/plugins/global/plugins.bundle.css?v=7.0.3') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url('staff/assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.3') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url('staff/assets/css/style.bundle.css?v=7.0.3') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="{{ url('staff/assets/css/themes/layout/header/base/light.css?v=7.0.3') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url('staff/assets/css/themes/layout/header/menu/light.css?v=7.0.3') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url('staff/assets/css/themes/layout/brand/dark.css?v=7.0.3') }}" rel="stylesheet" type="text/css" />
		<link href="{{ url('staff/assets/css/themes/layout/aside/dark.css?v=7.0.3') }}" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{ url('staff/assets/media/logos/favicon.ico') }}" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
        <!--begin::Main-->
        <div id="app" class="d-flex flex-column flex-root"
                data-vue-page="login"
                data-vue-props="{{ json_encode([]) }}"
            >
            @include('staff.partials.pre_data')
            <!--begin::Login-->
            <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-row-fluid bg-white" id="kt_login">
                <!--begin::Aside-->
                <div class="login-aside d-flex flex-row-auto bgi-size-cover bgi-no-repeat p-10 p-lg-10" style="background-image: url({{ url('staff/assets/media/bg/bg-4.jpg') }});">
                    <!--begin: Aside Container-->
                    <div class="d-flex flex-row-fluid flex-column justify-content-between">
                        <!--begin: Aside header-->
                        <a href="#" class="flex-column-auto mt-5">
                            <img src="{{ url('staff/assets/media/logos/logo-letter-1.png') }}" class="max-h-70px" alt="" />
                        </a>
                        <!--end: Aside header-->
                        <!--begin: Aside content-->
                        <div class="flex-column-fluid d-flex flex-column justify-content-center">
                            <h3 class="font-size-h1 mb-5 text-white">CG Tracking!</h3>
                            <p class="font-weight-lighter text-white opacity-80">Admin panel</p>
                        </div>
                        <!--end: Aside content-->
                        <!--begin: Aside footer for desktop-->
                        <div class="d-none flex-column-auto d-lg-flex justify-content-between mt-10">
                            <div class="opacity-70 font-weight-bold text-white">© 2020 LGS Dev</div>
                            <div class="d-flex">
                                <a href="#" class="text-white">Privacy</a>
                                <a href="#" class="text-white ml-10">Legal</a>
                                <a href="#" class="text-white ml-10">Contact</a>
                            </div>
                        </div>
                        <!--end: Aside footer for desktop-->
                    </div>
                    <!--end: Aside Container-->
                </div>
                <!--begin::Aside-->
                <!--begin::Content-->
                <div class="flex-row-fluid d-flex flex-column position-relative p-7 overflow-hidden">
                    <!--begin::Content body-->
                    <div class="d-flex flex-column-fluid flex-center mt-30 mt-lg-0">
                        <!--begin::Signin-->
                        <div class="login-form login-signin">
                            <div class="text-center mb-10 mb-lg-20">
                                <h3 class="font-size-h1">Sign In</h3>
                                <p class="text-muted font-weight-bold">Enter your username and password</p>
                            </div>
                            <!--begin::Form-->
                            <form class="form" method="POST" action="{{ route('staff.auth.login') }}">
                                @csrf
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-5 px-6 {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" placeholder="Email" name="email" autocomplete="off" />
                                    {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-5 px-6 {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" placeholder="Password" name="password" autocomplete="off" />
                                    {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
                                </div>
                                <!--begin::Action-->
                                <div class="form-group d-flex flex-wrap justify-content-end align-items-center">
                                    <button type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3">Sign In</button>
                                </div>
                                <!--end::Action-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Signin-->
                        <!--begin::Signup-->
                        <div class="login-form login-signup">
                            <div class="text-center mb-10 mb-lg-20">
                                <h3 class="font-size-h1">Sign Up</h3>
                                <p class="text-muted font-weight-bold">Enter your details to create your account</p>
                            </div>
                            <!--begin::Form-->
                            <form class="form" novalidate="novalidate" id="kt_login_signup_form">
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-5 px-6" type="text" placeholder="Fullname" name="fullname" autocomplete="off" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-5 px-6" type="email" placeholder="Email" name="email" autocomplete="off" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-5 px-6" type="password" placeholder="Password" name="password" autocomplete="off" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-5 px-6" type="password" placeholder="Confirm password" name="cpassword" autocomplete="off" />
                                </div>
                                <div class="form-group">
                                    <label class="checkbox mb-0">
                                    <input type="checkbox" name="agree" />I Agree the
                                    <a href="#">terms and conditions</a>.
                                    <span></span></label>
                                </div>
                                <div class="form-group d-flex flex-wrap flex-center">
                                    <button type="button" id="kt_login_signup_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Submit</button>
                                    <button type="button" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-4">Cancel</button>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Signup-->
                        <!--begin::Forgot-->
                        <div class="login-form login-forgot">
                            <div class="text-center mb-10 mb-lg-20">
                                <h3 class="font-size-h1">Forgotten Password ?</h3>
                                <p class="text-muted font-weight-bold">Enter your email to reset your password</p>
                            </div>
                            <!--begin::Form-->
                            <form class="form" novalidate="novalidate" id="kt_login_forgot_form">
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-5 px-6" type="email" placeholder="Email" name="email" autocomplete="off" />
                                </div>
                                <div class="form-group d-flex flex-wrap flex-center">
                                    <button type="button" id="kt_login_forgot_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Submit</button>
                                    <button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-4">Cancel</button>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Forgot-->
                    </div>
                    <!--end::Content body-->
                    <!--begin::Content footer for mobile-->
                    <div class="d-flex d-lg-none flex-column-auto flex-column flex-sm-row justify-content-between align-items-center mt-5 p-5">
                        <div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">© 2020 Metronic</div>
                        <div class="d-flex order-1 order-sm-2 my-2">
                            <a href="#" class="text-dark-75 text-hover-primary">Privacy</a>
                            <a href="#" class="text-dark-75 text-hover-primary ml-4">Legal</a>
                            <a href="#" class="text-dark-75 text-hover-primary ml-4">Contact</a>
                        </div>
                    </div>
                    <!--end::Content footer for mobile-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Login-->
        </div>
        <!--end::Main-->
		<script>var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
        <!--end::Global Config-->
        <!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{ url('staff/assets/plugins/global/plugins.bundle.js?v=7.0.3') }}"></script>
		<!--end::Global Theme Bundle-->
		<script src="{{ url('staff/js/app.js') }}"></script>
	</body>
	<!--end::Body-->
</html>