<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>SIVM</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" 
    type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('fuse/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('fuse/plugins/node-waves/waves.css') }}" rel="stylesheet">
    
    <!-- Animation Css -->
    <link href="{{ asset('fuse/plugins/animate-css/animate.css') }}" rel="stylesheet">

    <!-- Sweet Alert Css -->
    <link href="{{ asset('fuse/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">

    <!-- JQuery DataTable Css -->
    <link href="{{ asset('fuse/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" 
    rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="{{ asset('fuse/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{ asset('fuse/css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('fuse/css/themes/all-themes.css') }}" rel="stylesheet">
</head>

<body class="theme-blue">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Carregando...</p>
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            @include('fuse.template.topbar')
        </div>
    </nav>

    <!-- Sidebar -->
    <section>
        <aside id="leftsidebar" class="sidebar">
            @include('fuse.template.sidebar')
        </aside>
    </section>

    <!-- Conteúdo -->
    <section class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="{{ asset('fuse/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('fuse/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ asset('fuse/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('fuse/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="{{ asset('fuse/plugins/jquery-validation/jquery.validate.js') }}"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="{{ asset('fuse/plugins/jquery-steps/jquery.steps.js') }}"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="{{ asset('fuse/plugins/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('fuse/plugins/node-waves/waves.js') }}"></script>

    <script src="{{ asset('fuse/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('fuse/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('fuse/js/admin.js') }}"></script>
    <script src="{{ asset('fuse/js/pages/tables/jquery-datatable.js') }}"></script>
    <script src="{{ asset('fuse/js/pages/forms/form-validation.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{ asset('fuse/js/demo.js') }}"></script>

    <!-- Validator Bootstrap Js -->
    <script src="{{ asset('fuse/js/validator.js') }}"></script>

    <!-- Biblioteca para Mascaras Jquery Js -->
    <script src="{{ asset('fuse/js/mascaras.js') }}"></script>

    <!-- Mascaras Jquery Js -->
    <script src="{{ asset('fuse/js/jquery.maskedinput.js') }}"></script>

    <!-- Moment Js -->
    <script src="{{ asset('fuse/plugins/momentjs/moment.js') }}"></script>

</body>

</html>