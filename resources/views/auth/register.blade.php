{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}








<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!-- Title -->
		<title> Valex -  Premium dashboard ui bootstrap rwd admin html5 template </title>

		<!--- Favicon --->
        <link rel="icon" href="{{ asset('/img/brand/favicon.png') }}" type="image/x-icon" />

		<!--- Icons css --->
        <link href="{{ asset('/css/icons.cs') }}" rel="stylesheet">

		<!-- Bootstrap css -->
        <link href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

		<!-- style css -->
		<link href="../assets/css/style.css" rel="stylesheet">

		<!--- Animations css --->
		<link href="../assets/css/animate.css" rel="stylesheet">

	</head>	<body class="ltr error-page1 main-body error-3">

		

		<!-- Page -->
		<div class="page overflow-hidden">

			<div class="main-container container-fluid">
				<div class="row no-gutter">
					<!-- The image half -->
					<div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
						<div class="row wd-100p mx-auto text-center">
							<div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
								<img src="{{ asset('/img/login.png') }}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
							</div>
						</div>
					</div>
					<!-- The content half -->
					<div class="col-md-6 col-lg-6 col-xl-5 bg-white py-4">
						<div class="login d-flex align-items-center py-2">
							<!-- Demo content-->
							<div class="container p-0">
								<div class="row">
									<div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
										<div class="card-sigin">
											<div class="mb-5 d-flex">
												
												<h1 class="main-logo1 ms-1 me-0 my-auto tx-28">Registro</h1>
											</div>
											<div class="main-signup-header">
												<h2 class="text-primary">Comenzar</h2>
												<h5 class="fw-normal mb-4">Es gratis registrarse y solo toma un minuto.</h5>

                                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
												<form method="POST" action="{{ route('register') }}">
                                                    @csrf
													<div class="form-group">
														<label>Nombre</label>
                                                         <input class="form-control" placeholder="Ingresa tu nombre..." type="text" name="name" value="{{ old('name') }}">
													</div>

													<div class="form-group">
														<label>Correo</label>
                                                        <input class="form-control" placeholder="Ingresa tu correo.." type="text" name="email" value="{{ old('email') }}">
													</div>

													<div class="form-group">
														<label>Password</label> <input class="form-control" placeholder="Ingresa tu contraseña..." type="password" name="password" value="{{ old('password') }}">
													</div>
                                                    
                                                    <div class="form-group">
														<label>Confirmar contraseña</label> <input class="form-control" placeholder="Confirma tu contraseña..." type="password" name="password_confirmation" value="{{ old('password_confirmation') }}">
													</div>

                                                    <button class="btn btn-main-primary btn-block">Create Account</button>
													
												</form>
												<div class="main-signup-footer mt-5">
													<p>Already have an account? <a href="{{route('login')}}">Sign In</a></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- End -->
						</div>
					</div><!-- End -->
				</div>
			</div>

		</div>
		<!-- End Page -->

		<!--- JQuery min js --->
		<script src="../assets/plugins/jquery/jquery.min.js"></script>

		<!--- Bootstrap Bundle js --->
		<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--- JQuery sparkline js --->
		<script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

		<!--- Moment js --->
		<script src="../assets/plugins/moment/moment.js"></script>

		<!-- P-scroll js -->
		<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

		<!--- Eva-icons js --->
		<script src="../assets/js/eva-icons.min.js"></script>

		<!--- Rating js --->
		<script src="../assets/plugins/ratings-2/jquery.star-rating.js"></script>
		<script src="../assets/plugins/ratings-2/star-rating.js"></script>

		<!--themecolor js-->
		<script src="../assets/js/themecolor.js"></script>

		<!--- Custom js --->
		<script src="../assets/js/custom.js"></script>

	</body>
</html>
