<!doctype html>
<html lang="en" dir="ltr">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!-- Title -->
		<title> Administración </title>

		<!-- Favicon -->
		<link rel="icon" href="{{ asset('/img/brand/favicon.png') }}" type="image/x-icon" />		
		

		<!-- Bootstrap css -->
		<link href="{{ asset('assets') }}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- style css -->
		<link href="{{ asset('assets') }}/css/style.css " rel="stylesheet">
        
		<!--- Animations css-->
		<link href="{{asset('assets')}}/css/animate.css" rel="stylesheet">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        @livewireStyles
	</head>

	<body class="ltr main-body app sidebar-mini">	

		<!-- Page -->
		<div class="page">
			<div>
				<!-- main-header -->
				<div class="main-header side-header sticky nav nav-item">
					<div class="container-fluid main-container ">
						<div class="main-header-left ">
							{{-- <div class="responsive-logo">
								<a href="index.html" class="header-logo">
									<img src="../assets/img/brand/logo.png" class="logo-1" alt="logo">
									<img src="../assets/img/brand/logo-white.png" class="dark-logo-1" alt="logo">
								</a>
							</div> --}}
							<div class="app-sidebar__toggle" data-bs-toggle="sidebar">
								<a class="open-toggle" href="javascript:void(0);"><i class="fa-solid fa-bars"></i></a>
								<a class="close-toggle" href="javascript:void(0);"><i class="fa-solid fa-bars"></i></a>
							</div>
							
						</div>
						<div class="main-header-right">
							<button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon fe fe-more-vertical "></span>
							</button>
							<div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
								<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
									<ul class="nav nav-item  navbar-nav-right ms-auto">
										
										{{-- <li class="dropdown nav-item main-layout">
											<a class="new nav-link theme-layout nav-link-bg layout-setting" >
												<span class="dark-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M20.742 13.045a8.088 8.088 0 0 1-2.077.271c-2.135 0-4.14-.83-5.646-2.336a8.025 8.025 0 0 1-2.064-7.723A1 1 0 0 0 9.73 2.034a10.014 10.014 0 0 0-4.489 2.582c-3.898 3.898-3.898 10.243 0 14.143a9.937 9.937 0 0 0 7.072 2.93 9.93 9.93 0 0 0 7.07-2.929 10.007 10.007 0 0 0 2.583-4.491 1.001 1.001 0 0 0-1.224-1.224zm-2.772 4.301a7.947 7.947 0 0 1-5.656 2.343 7.953 7.953 0 0 1-5.658-2.344c-3.118-3.119-3.118-8.195 0-11.314a7.923 7.923 0 0 1 2.06-1.483 10.027 10.027 0 0 0 2.89 7.848 9.972 9.972 0 0 0 7.848 2.891 8.036 8.036 0 0 1-1.484 2.059z"/></svg></span>
												<span class="light-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M6.993 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007S14.761 6.993 12 6.993 6.993 9.239 6.993 12zM12 8.993c1.658 0 3.007 1.349 3.007 3.007S13.658 15.007 12 15.007 8.993 13.658 8.993 12 10.342 8.993 12 8.993zM10.998 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2h-3zm17 0h3v2h-3zM4.219 18.363l2.12-2.122 1.415 1.414-2.12 2.122zM16.24 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.342 7.759 4.22 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z"/></svg></span>
											</a>
										</li> --}}
										<li class="dropdown main-profile-menu nav nav-item nav-link">
											<a class="profile-user d-flex" href=""><img alt="" src="{{asset('/img/user.png')}}"></a>
											<div class="dropdown-menu">
												<div class="main-header-profile bg-primary p-3">
													<div class="d-flex wd-100p">
														
														<div class="ms-3 my-auto">
															<h6>@auth
																{{Auth::user()->name}}
															@endauth
														</div>
													</div>
												</div>
												<form action="{{route('logout')}}" method="POST">
													@csrf
													<button class="btn btn-primary-light" type="submit"><i data-feather="log-out"></i>Cerrar sesión</button>
												</form>
												
											</div>
										</li>
									
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /main-header -->

				<!-- main-sidebar -->
				<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
				<div class="sticky">
					<aside class="app-sidebar sidebar-scroll">
						<div class="main-sidebar-header active">							
							
						</div>
						<div class="main-sidemenu">
							
							<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
							<ul class="side-menu">
								
								<li class="slide">
									<a class="side-menu__item" href="{{route('proyectospp.index')}}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">Proyectos PP</a>
								</li>
								<li class="slide">
									<a class="side-menu__item" href="{{route('personas.index')}}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">Personas</a>
								</li>
								<li class="slide">
									<a class="side-menu__item" href="{{route('personas.reporte')}}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">Reporte personas</a>
								</li>
								
							</ul>
							<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
						</div>
					</aside>
				</div>
				<!-- main-sidebar -->
			</div>

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

				<!-- breadcrumb -->
				@yield('contenido') 
				<!-- breadcrumb -->

					<!-- row -->
					<div class="row">

					</div>
					<!-- row closed -->
				</div>
				<!-- Container closed -->
			</div>	

			<!-- Footer opened -->
			<div class="main-footer ht-45">
				<div class="container-fluid pd-t-0 ht-100p">
					<span> Copyright © 2022 <a href="javascript:void(0);" class="text-primary">Valex</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);"> Spruko </a> All rights reserved.</span>
				</div>
			</div>
			<!-- Footer closed -->

		</div>
		<!-- End Page -->

	

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!-- JQuery min js -->
		<script src="{{asset('assets')}}/plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap Bundle js -->
		<script src="{{asset('assets')}}/plugins/bootstrap/js/popper.min.js"></script>
		<script src="{{asset('assets')}}/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Moment js -->
		<script src="{{asset('assets')}}/plugins/moment/moment.js"></script>

		<!-- P-scroll js -->
		<script src="{{asset('assets')}}/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="{{asset('assets')}}/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!-- Sticky js -->
		<script src="{{asset('assets')}}/js/sticky.js"></script>

		<!-- eva-icons js -->
		<script src="{{asset('assets')}}/js/eva-icons.min.js"></script>

		<!-- Rating js-->
		<script src="{{asset('assets')}}/plugins/ratings-2/jquery.star-rating.js"></script>
		<script src="{{asset('assets')}}/plugins/ratings-2/star-rating.js"></script>

		<!-- Sidebar js -->
		<script src="{{asset('assets')}}/plugins/side-menu/sidemenu.js"></script>

		<!-- Right-sidebar js -->
		<script src="{{asset('assets')}}/plugins/sidebar/sidebar.js"></script>
		<script src="{{asset('assets')}}/plugins/sidebar/sidebar-custom.js"></script>

		{{-- <!--themecolor js-->
		<script src="{{asset('assets')}}/js/themecolor.js"></script> --}}

		<!-- custom js -->
		<script src="{{asset('assets')}}/js/custom.js"></script>

        @livewireScripts

	</body>
</html>