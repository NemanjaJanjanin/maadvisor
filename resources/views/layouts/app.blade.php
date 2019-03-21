<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>M&A Advisor | Dashboard</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

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

		<!--RTL version:<link href="{{ asset('resources/assets/admin_assets/') }}/demo/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->

		<!--begin::Page Vendors Styles -->
		<!-- <link href="{{ asset('resources/assets/admin_assets/') }}/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" /> -->
		<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="{{ asset('resources/assets/admin_assets/') }}/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Page Vendors Styles -->
		<link rel="shortcut icon" href="{{ url('/') }}/favicon.png" />
		@yield('other_css')
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- BEGIN: Header -->
			<header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">

						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-dark ">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="{{ url('home') }}" class="m-brand__logo-wrapper">
										<img alt="" src="{{ url('/') }}/logo.png" width="120"/>
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">

									<!-- BEGIN: Left Aside Minimize Toggle -->
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Responsive Header Menu Toggler -->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>

									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>

						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

							<!-- BEGIN: Horizontal Menu -->
							<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>


							<!-- END: Horizontal Menu -->

							<!-- BEGIN: Topbar -->
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
										<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
										 m-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
													<img src="{{ asset('resources/assets/admin_assets/') }}/images/no_avatar.png" class="m--img-rounded m--marginless" alt="" />
												</span>
												<span class="m-topbar__username m--hide">Nick</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background: url({{ asset('resources/assets/admin_assets/') }}/assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
														<div class="m-card-user m-card-user--skin-dark">
															<div class="m-card-user__pic">
																<img src="{{ asset('resources/assets/admin_assets/') }}/images/no_avatar.png" class="m--img-rounded m--marginless" alt="" />

																<!--
						<span class="m-type m-type--lg m--bg-danger"><span class="m--font-light">S<span><span>
						-->
															</div>
															<div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">{{ Auth::user()->username }}</span>
																<span class="m-card-user__email m--font-weight-300">{{ Auth::user()->email }}</span>
															</div>
														</div>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__section m--hide">
																	<span class="m-nav__section-text">Section</span>
																</li>
																<li class="m-nav__separator m-nav__separator--fit">
																</li>
																<li class="m-nav__item">
																	<a href="{{ url('logout') }}" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>

			<!-- END: Header -->

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

					<!-- BEGIN: Aside Menu -->
					<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
							m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative; display :
								@if(Auth::user()->user_type == '1')
									block
								@else
									none
								@endif">
						<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
							<li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="{{ url('home') }}" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Dashboard</span>
											<span class="m-menu__link-badge"></span> </span></span></a></li>
							<li class="m-menu__section ">
								<h4 class="m-menu__section-text">Contact Data</h4>
								<i class="m-menu__section-icon flaticon-more-v2"></i>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
								<a href="javascript:;" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">Contact Data</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Database</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="{{ url('search_all') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">All Contact Data</span></a></li>
									</ul>
								</div>
							</li>
							<li class="m-menu__section ">
								<h4 class="m-menu__section-text">Administration</h4>
								<i class="m-menu__section-icon flaticon-more-v2"></i>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
								<a href="javascript:;" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-user"></i><span class="m-menu__link-text">Update & Sync</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Update & Sync</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="{{ url('update_sync/cvent') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Cvent</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="{{ url('update_sync/openwater') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">OpenWater</span></a></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="{{ url('update_sync/zoho') }}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Zoho</span></a></li>
									</ul>
								</div>
							</li>
						</ul>
					</div>

					<!-- END: Aside Menu -->
				</div>

				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					@yield('content')
					<!-- BEGIN: Subheader -->

				</div>
			</div>

			<!-- end:: Body -->

			<!-- begin::Footer -->
			<footer class="m-grid__item m-footer ">
				<div class="m-container m-container--fluid m-container--full-height m-page__container">
					<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								2019 &copy; M&A Advisor
							</span>
						</div>
						<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
							<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">About</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">Privacy</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">T&C</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>

			<!-- end::Footer -->
		</div>

		<!-- end:: Page -->

		<!-- begin::Quick Sidebar -->

		<!-- end::Quick Sidebar -->

		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>

		<!-- end::Scroll Top -->

		<!-- begin::Quick Nav -->


		<!-- begin::Quick Nav -->

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

		<!--begin::Page Vendors -->
		<script src="{{ asset('resources/assets/admin_assets/') }}/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
		<!--end::Page Vendors -->

		<!--begin::Page Scripts -->
		<script src="{{ asset('resources/assets/admin_assets/') }}/assets/app/js/dashboard.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
		@yield('other_js')
	</body>

	<!-- end::Body -->
</html>
