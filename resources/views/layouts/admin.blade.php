<?php
/**
 * Created by PhpStorm.
 * User: Starglob2
 * Date: 27/01/2021
 * Time: 13:41
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{-- $titlePage --}}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

@section('estilos')
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('adminZone/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('adminZone/dist/css/adminlte.min.css') }}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @show
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            @can('roles.index')
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('roles.index') }}" class="nav-link">Roles</a>
                </li>
            @endcan

            @can('users.index')
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('users.index') }}" class="nav-link">Usuarios</a>
                </li>
            @endcan
            @can('contacto.index')
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('contacto.index') }}" class="nav-link">Contacto</a>
            </li>
            @endcan
            @can('tipo.index')
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('tipo.index') }}" class="nav-link">Tipo</a>
            </li>
            @endcan
            @can('sector.index')
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('sector.index') }}" class="nav-link">Sector</a>
            </li>
            @endcan
            @can('capacidad.index')
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('capacidad.index') }}" class="nav-link">Capacidad</a>
            </li>
            @endcan
            @can('image.index')
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('image.index') }}" class="nav-link">Imagen</a>
            </li>
            @endcan
            @can('sliderPrincipal.index')
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('sliderPrincipal.index') }}" class="nav-link">Slider Principal</a>
            </li>
            @endcan
        </ul>

        <ul class="navbar-nav ml-auto">

            <!-- Logout -->
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                   role="button" title="Salir"><i class="fas fa-sign-out-alt"></i></a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        {{--<a href="../../index3.html" class="brand-link">--}}
            {{--<img src="{{ asset('adminZone/dist/img/AdminLTELogo.png') }}"--}}
                 {{--alt="AdminLTE Logo"--}}
                 {{--class="brand-image img-circle elevation-3"--}}
                 {{--style="opacity: .8">--}}
            {{--<span class="brand-text font-weight-light">AdminLTE 3</span>--}}
        {{--</a>--}}

        <a href="{{ route('admin') }}" class="brand-link">
            {{--<img src="{{ asset('icon/favicon.ico') }}"
                 alt="P Monty Logo"
                 class="brand-image img-circle elevation-3">--}}
            <span class="brand-text font-weight-light">El Milagro</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('adminZone/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    {{--<img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="img-circle elevation-2">--}}
                </div>
                <div class="info">
                    <a href="#" class="d-block"> {{ Auth::user()->name }} {{ Auth::user()->surname }}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">

                    @can('roles.index')
                        <li class="nav-item has-treeview">
                            {{--<a href="{{ route('admin.roles.index') }}" class="nav-link">--}}
                            <a href="{{ route('roles.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-briefcase"></i>
                                <p>Roles</p>
                            </a>
                        </li>
                    @endcan
                    @can('users.index')
                        <li class="nav-item has-treeview">
                            <a href="{{ route('users.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                    @endcan
                    @can('contacto.index')
                    <li class="nav-item has-treeview">
                        <a href="{{ route('contacto.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-address-book"></i>
                            <p>Contacto</p>
                        </a>
                    </li>
                    @endcan
                    @can('tipo.index')
                    <li class="nav-item has-treeview">
                        <a href="{{ route('tipo.index') }}" class="nav-link">

                            <i class="nav-icon fas fa-warehouse"></i>
                            <p>Tipo</p>
                        </a>
                    </li>
                    @endcan
                    @can('sector.index')
                    <li class="nav-item has-treeview">
                        <a href="{{ route('sector.index') }}" class="nav-link">
                            {{-- <i class="fa-solid fa-house-blank"></i> --}}
                            <i class="nav-icon fas fa-home"></i>
                            <p>Sector</p>
                        </a>
                    </li>
                    @endcan
                    @can('capacidad.index')
                    <li class="nav-item has-treeview">
                        <a href="{{ route('capacidad.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-warehouse"></i>
                            <p>Capacidad</p>
                        </a>
                    </li>
                    @endcan
                    @can('image.index')
                    <li class="nav-item has-treeview">
                        <a href="{{ route('image.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-solid fa-image"></i>
                            {{-- <i class="nav-icon fas fa-solid fa-folder-image"></i> --}}
                            <p>Imagenes</p>
                        </a>
                    </li>
                    @endcan
                    @can('sliderPrincipal.index')
                    <li class="nav-item has-treeview">
                        <a href="{{ route('sliderPrincipal.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-solid fa-images"></i>
                            <p>Slider Principal</p>
                        </a>
                    </li>
                    @endcan
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    @section('breadcrumb')
        <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Página principal</h1>
                            
                        </div>
                        

                    </div>
                    <div class="row">

                        <div class="col-lg-3 col-6">
                            
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <p>Slider Principal</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-solid fa-images"></i>
                                </div>
                                <a href="{{ route('sliderPrincipal.index') }}" class="small-box-footer">
                                    Acceder <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <p>Sector</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-home"></i>
                                </div>
                                <a href="{{ route('sector.index') }}" class="small-box-footer">
                                    Acceder <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <p>Imagenes</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-solid fa-image"></i>
                                </div>
                                <a href="{{ route('image.index') }}" class="small-box-footer">
                                   Acceder <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
    @show

        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">

                @yield('content')
                

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    {{--<footer class="main-footer">--}}
        {{--<div class="float-right d-none d-sm-block">--}}
            {{--<b>Version</b> 3.0.5--}}
        {{--</div>--}}
        {{--<strong>Copyright &copy; @php echo date('Y'); @endphp <a href="https://www.starglob.com">Starglob Soluciones--}}
                {{--Informáticas</a>.</strong> Todos los derechos reservados.--}}
    {{--</footer>--}}

    <footer class="main-footer">
        <strong>Copyright &copy; @php echo date('Y'); @endphp <a href="https://www.starglob.com">Starglob Soluciones
                Informáticas</a>.</strong> Todos los derechos reservados.
    </footer>

    <!-- Control Sidebar -->
    {{--<aside class="control-sidebar control-sidebar-dark">--}}
        {{--<!-- Control sidebar content goes here -->--}}
    {{--</aside>--}}
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Modal -->
@yield('modalEliminar')

@section('scripts')
    <!-- jQuery -->
    <script src="{{ asset('/adminZone/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/adminZone/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/adminZone/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('/adminZone/dist/js/demo.js') }}"></script>
@show
</body>
</html>
