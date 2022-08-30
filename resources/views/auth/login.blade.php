<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords"
        content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />

    <!-- Title -->
    <title> Login </title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('/img/brand/favicon.png') }}" type="image/x-icon" />

    <!-- Icons css -->
    <link href="{{ asset('assets') }}/css/icons.cs" rel="stylesheet">

    <!-- Bootstrap css -->
    <link href="{{ asset('assets') }}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- style css -->
    <link href="{{ asset('assets') }}/css/style.css " rel="stylesheet">

    <!--- Animations css-->
    <link href="{{asset('assets')}}/css/animate.css" rel="stylesheet">

</head>

<body class="ltr error-page1 main-body bg-light text-dark error-3">
    <!-- Page -->
    <div class="page">

        <div class="main-container container-fluid">
            <div class="row no-gutter">
                <!-- The image half -->
                <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
                    <div class="row wd-100p mx-auto text-center">
                        <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                            <img src="{{ asset('/img/login.png') }}"
                                class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
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

                                        <div class="card-sigin">
                                            <div class="main-signup-header">
                                                <h2>Bienvenido</h2>
                                                <h5 class="fw-semibold mb-4">Inicie sesión para continuar.</h5>

                                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                                <form action="{{ route('login') }}" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Correo</label> <input class="form-control"
                                                            placeholder="Enter your email" type="email"
                                                            name="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Contraseña</label> <input class="form-control"
                                                            placeholder="Enter your password" type="password"
                                                            name="password">
                                                    </div>
                                                    <button class="btn btn-main-primary btn-block">Ingresar
                                                    </button>
                                                </form>

                                                <div class="main-signin-footer mt-5">													
													<p _msthash="4313179" _msttexthash="1033032">¿No tienes una cuenta? <a href="{{route('register')}}" _istranslated="1">Crear una cuenta</a></p>
												</div>

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

    <!-- JQuery min js -->
    <script src="{{asset('assets')}}/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Bundle js -->
    <script src="{{asset('assets')}}/plugins/bootstrap/js/popper.min.js"></script>
    <script src="{{asset('assets')}}/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Moment js -->
    <script src="{{asset('assets')}}/plugins/moment/moment.js"></script>

    <!-- P-scroll js -->
    <script src="{{asset('assets')}}/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <!-- eva-icons js -->
    <script src="{{asset('assets')}}/js/eva-icons.min.js"></script>

    <!-- Rating js-->
    <script src="{{asset('assets')}}/plugins/ratings-2/jquery.star-rating.js"></script>
    <script src="{{asset('assets')}}/plugins/ratings-2/star-rating.js"></script>

   {{--  <!--themecolor js-->
    <script src="{{asset('assets')}}/js/themecolor.js"></script> --}}

    <!-- custom js -->
    <script src="{{asset('assets')}}/js/custom.js"></script>

</body>

</html>
