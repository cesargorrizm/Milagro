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
    <!-- Stylesheets-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" id="main-styles-link">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{-- $titlePage --}}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

@yield('css')
<!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminZone/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('adminZone/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

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
        <a href="{{ route('admin') }}" class="brand-link">
            {{--<img src="{{ asset('icon/favicon.ico') }}"
                 alt="P Monty Logo"
                 class="brand-image img-circle elevation-3">--}}
            <span class="brand-text font-weight-light">Admin Fiestas del Ángel</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">

                    {{--<img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="img-circle elevation-2">--}}

                </div>
                <div class="info">
                    {{--<a href="/user/profile" class="d-block"> {{ Auth::user()->name }}</a>--}}
                    <a href="#" class="d-block"> {{ Auth::user()->name }} {{ Auth::user()->surname }}</a>

                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    @can('roles.index')
                        <li class="nav-item has-treeview">
                            <a href="{{ route('roles.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-briefcase"></i>
                                <p>Roles</p>
                            </a>
                        </li>
                    @endcan
                    @can('usuarios.index')
                        <li class="nav-item has-treeview">
                            <a href="{{ route('usuarios.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                    @endcan
                    <li class="nav-item has-treeview">
                        <a href="{{ route('inicio_fiestas.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-calendar-alt"></i>
                            <p>Inicio Fiestas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('programas_ayuntamiento.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-school"></i>
                            <p>Ayuntamiento </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{ route('colaboradores.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Colaboradores</p>
                        </a>
                    </li>
                    <!--
                    <li class="nav-item has-treeview">
                        <a href="" class="nav-link">
                            <i class="nav-icon fas fa-file"></i>
                            <p>Contenidos</p>
                        </a>
                    </li>
                    -->
                    <li class="nav-item has-treeview">
                        <a href="{{ route('carteles.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-clipboard-list"></i>
                            <p>Carteles</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('penas.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-utensils"></i>
                            <p>Peñas</p>
                        </a>
                    </li>

                    <li class="nav-header">POSTS</li>

                    <li class="nav-item">
                        <a href="{{ route('tags.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>Etiquetas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('noticias.index') }}" class="nav-link">
                            <i class="nav-icon far fa-newspaper"></i>
                            <p>Noticias</p>
                        </a>
                    </li>

                    <br>
                    <li class="nav-item">
                        <a href="{{ route('seisados.index') }}" class="nav-link">
                            <i class="nav-icon far fa-id-badge"></i>
                            <p>Seisados</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('galerias_imagenes.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-images"></i>
                            <p>Galería imágenes</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('galerias_videos.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-video"></i>
                            <p>Galería videos</p>
                        </a>
                    </li>
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
                </div><!-- /.container-fluid -->
            </section>
    @show


    <!-- Main content -->
        <section class="content">

            <div class="container-fluid">

                @yield('contenido')

            </div>
        </section>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <strong>Copyright &copy; @php echo date('Y'); @endphp <a href="https://www.starglob.com">Starglob Soluciones
                Informáticas</a>.</strong> Todos los derechos reservados.
    </footer>

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
@yield('js')
</body>
</html>

