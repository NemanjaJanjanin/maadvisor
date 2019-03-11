<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>M&A Advisor | Dashboard Login</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script> -->
		<!-- <script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script> -->

		<!--end::Web font -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/jstree/dist/themes/default/style.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/chartist/dist/chartist.min.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/vendors/flaticon/css/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/vendors/metronic/css/styles.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles -->
		<link href="{{ asset('resources/assets/admin_assets/') }}/assets/demo/base/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="{{ asset('resources/assets/admin_assets/') }}/assets/demo/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->
		<link rel="shortcut icon" href="favicon.png" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-3" id="m_login" style="background-image: url({{ asset('resources/assets/admin_assets/') }}/assets/app/media/img//bg/bg-2.jpg);">
				<div class="m-grid__item m-grid__item--fluid m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							<a href="{{ url('/login') }}">
								<img src="logo.png">
							</a>
						</div>

						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">Sign In To Dashboard</h3>
							</div>
							@if (Session::has('succ'))
				                <div class="alert alert-success alert-dismissible">
				                    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
				                    {!! session('succ') !!}
				                </div>
				            @endif

				            @if (Session::has('error'))
				                <div class="alert alert-danger alert-dismissible">
				                    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
				                    {!! session('error') !!}
				                </div>
				            @endif
							<form class="m-login__form m-form" id="login_form" action="{{url('/signin')}}" method="post">
								<div class="form-group m-form__group">
                                    <input type="hidden" name="_token" id="csrf-token1" value="{{ csrf_token() }}" />
									<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
								</div>
								<div class="row m-login__form-sub">
									<div class="col m--align-right m-login__form-right">
										<a href="javascript:;" id="m_login_forget_password" class="m-link">Forget Password ?</a>
									</div>
								</div>
								<div class="m-login__form-action">
									<button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">Sign In</button>
								</div>
							</form>
						</div>
						<div class="m-login__signup">
							<div class="m-login__head">
								<h3 class="m-login__title">Sign Up</h3>
								<div class="m-login__desc">Enter your details to create your account:</div>
							</div>
							<form class="m-login__form m-form" id="register_form" action="{{url('/signup')}}" method="post">
                                <input type="hidden" name="_token" id="csrf-token2" value="{{ csrf_token() }}" />
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Full Name" name="fullname">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="password" placeholder="Password" name="password">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Confirm Password" name="rpassword">
								</div>
								<div class="row form-group m-form__group m-login__form-sub">
									<div class="col m--align-left">
										<label class="m-checkbox m-checkbox--focus">
											<input type="checkbox" name="agree">I Agree the <a href="#" class="m-link m-link--focus">terms and conditions</a>.
											<span></span>
										</label>
										<span class="m-form__help"></span>
									</div>
								</div>
								<div class="m-login__form-action">
									<button id="m_login_signup_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn">Sign Up</button>&nbsp;&nbsp;
									<button id="m_login_signup_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom  m-login__btn">Cancel</button>
								</div>
							</form>
						</div>
						<div class="m-login__forget-password">
							<div class="m-login__head">
								<h3 class="m-login__title">Forgotten Password ?</h3>
								<div class="m-login__desc">Enter your email to reset your password:</div>
							</div>
							<form class="m-login__form m-form" id="forgotPasswordForm" action="{{url('/forgot_password')}}" method="post">
                                <input type="hidden" name="_token" id="csrf-token3" value="{{ csrf_token() }}" />
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
								</div>
								<div class="m-login__form-action">
									<button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primaryr">Request</button>&nbsp;&nbsp;
									<button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn">Cancel</button>
								</div>
							</form>
						</div>
						<div class="m-login__account">
							<span class="m-login__account-msg">
								Don't have an account yet ?
							</span>&nbsp;&nbsp;
							<a href="javascript:;" id="m_login_signup" class="m-link m-link--light m-login__account-link">Sign Up</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/wnumb/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/select2/dist/js/select2.full.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/dropzone/dist/dropzone.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/js/framework/components/plugins/forms/jquery-validation.init.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/js/framework/components/plugins/base/bootstrap-notify.init.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/jstree/dist/jstree.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/raphael/raphael.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/morris.js/morris.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/chartist/dist/chartist.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/js/framework/components/plugins/charts/chart.init.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="{{ asset('resources/assets/admin_assets/') }}/vendors/js/framework/components/plugins/base/sweetalert2.init.js" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle -->
		<script src="{{ asset('resources/assets/admin_assets/') }}/assets/demo/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts -->
		<script>
		//== Class Definition
		var SnippetLogin = function() {

		    var login = $('#m_login');

		    var showErrorMsg = function(form, type, msg) {
		        var alert = $('<div class="m-alert m-alert--outline alert alert-' + type + ' alert-dismissible" role="alert">\
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>\
					<span></span>\
				</div>');

		        form.find('.alert').remove();
		        alert.prependTo(form);
		        //alert.animateClass('fadeIn animated');
		        mUtil.animateClass(alert[0], 'fadeIn animated');
		        alert.find('span').html(msg);
		    }

		    //== Private Functions

		    var displaySignUpForm = function() {
		        login.removeClass('m-login--forget-password');
		        login.removeClass('m-login--signin');

		        login.addClass('m-login--signup');
		        mUtil.animateClass(login.find('.m-login__signup')[0], 'flipInX animated');
		    }

		    var displaySignInForm = function() {
		        login.removeClass('m-login--forget-password');
		        login.removeClass('m-login--signup');

		        login.addClass('m-login--signin');
		        mUtil.animateClass(login.find('.m-login__signin')[0], 'flipInX animated');
		        //login.find('.m-login__signin').animateClass('flipInX animated');
		    }

		    var displayForgetPasswordForm = function() {
		        login.removeClass('m-login--signin');
		        login.removeClass('m-login--signup');

		        login.addClass('m-login--forget-password');
		        //login.find('.m-login__forget-password').animateClass('flipInX animated');
		        mUtil.animateClass(login.find('.m-login__forget-password')[0], 'flipInX animated');

		    }

		    var handleFormSwitch = function() {
		        $('#m_login_forget_password').click(function(e) {
		            e.preventDefault();
		            displayForgetPasswordForm();
		        });

		        $('#m_login_forget_password_cancel').click(function(e) {
		            e.preventDefault();
		            displaySignInForm();
		        });

		        $('#m_login_signup').click(function(e) {
		            e.preventDefault();
		            displaySignUpForm();
		        });

		        $('#m_login_signup_cancel').click(function(e) {
		            e.preventDefault();
		            displaySignInForm();
		        });
		    }

		    var handleSignInFormSubmit = function() {
		        $('#m_login_signin_submit').click(function(e) {
		            e.preventDefault();
		            var btn = $(this);
		            var form = $(this).closest('form');

		            form.validate({
		                rules: {
		                    email: {
		                        required: true,
		                        email: true
		                    },
		                    password: {
		                        required: true
		                    }
		                }
		            });


		            if (!form.valid()) {
		                return;
		            }

		            btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);


		            form.submit();
		        });
		    }

		    var handleSignUpFormSubmit = function() {
		        $('#m_login_signup_submit').click(function(e) {
		            e.preventDefault();

		            var btn = $(this);
		            var form = $(this).closest('form');

		            form.validate({
		                rules: {
		                    fullname: {
		                        required: true
		                    },
		                    email: {
		                        required: true,
		                        email: true
		                    },
		                    password: {
		                        required: true
		                    },
		                    rpassword: {
		                        required: true
		                    },
		                    agree: {
		                        required: true
		                    }
		                }
		            });

		            if (!form.valid()) {
		                return;
		            }

		            btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);

					form.submit();
		        });
		    }

		    var handleForgetPasswordFormSubmit = function() {
		        $('#m_login_forget_password_submit').click(function(e) {
		            e.preventDefault();

		            var btn = $(this);
		            var form = $(this).closest('form');

		            form.validate({
		                rules: {
		                    email: {
		                        required: true,
		                        email: true
		                    }
		                }
		            });

		            if (!form.valid()) {
		                return;
		            }

		            btn.addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);
					form.submit();
		        });
		    }

		    //== Public Functions
		    return {
		        // public functions
		        init: function() {
		            handleFormSwitch();
		            handleSignInFormSubmit();
		            handleSignUpFormSubmit();
		            handleForgetPasswordFormSubmit();
		        }
		    };
		}();

		//== Class Initialization
		jQuery(document).ready(function() {
		    SnippetLogin.init();
		});
		</script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
