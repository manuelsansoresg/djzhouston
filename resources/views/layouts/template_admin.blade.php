<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/img/core-img/favicon.png">
    <title>@yield('title')</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor_assets/admin_lte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('vendor_assets/admin_lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('vendor_assets/admin_lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('vendor_assets/admin_lte/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendor_assets/admin_lte/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('vendor_assets/admin_lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('vendor_assets/admin_lte/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('vendor_assets/admin_lte/plugins/summernote/summernote-bs4.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor_assets/admin_lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor_assets/admin_lte/plugins/datatables-fixedheader/css/fixedHeader.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor_assets/admin_lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor_assets/bootstrap_datepicker/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">



    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">VER SITIO</a>
                </li>

            </ul>



            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">

                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->

                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->

                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="form-inline">
                        @csrf
                        <a href="#" class="nav-link" onclick="event.target.parentNode.submit();">
                            <i class="fas fa-sign-out-alt"></i> Salir
                        </a>

                    </form>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li> --}}
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">


            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                    <div class="info">
                        <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-header">MENÚ</li>

                        <li class="nav-item">
                            <a href="/admin/promotion" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>PROMOCIONES</p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="/admin/slider" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>SLIDER</p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>SERVICIOS<i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/service" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>SECCIÓN</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/service-content" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>CONTENIDO</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>GENEROS<i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/genre" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>SECCIÓN</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/genre-content" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>CONTENIDO</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>PAQUETES<i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/package" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>SECCIÓN</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/package-content" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>CONTENIDO</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>EVENTOS<i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/event" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>SECCIÓN</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/event-content" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>EVENTO</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>ACERCA DE MI<i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/about" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>SECCIÓN</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>CONTACTO<i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/contact" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>SECCIÓN</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>LUZ Y SONIDO<i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/sound-lighting" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>SECCIÓN</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/sound-lighting-content" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>LUZ Y SONIDO</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>BLOG<i class="fas fa-angle-left right"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/blog" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>SECCIÓN</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/blog-content" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>BLOG</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item text-center">
                            <img class="img-fluid" src="/img/logo_sin_fondo.png" style="width:50%" alt="">
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->

        {{-- contenido pagina --}}
        <div id="app">
            @yield('content')
        </div>
        {{-- contenido pagina --}}

        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy;<script>
                document.write(new Date().getFullYear());
            </script> All rights reserved by <a href="https://xpertsystems.com.mx/"
                target="_blank">Xpertsystems</a>

        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('vendor_assets/admin_lte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('vendor_assets/admin_lte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

    {{-- data table --}}
    <script src="{{ asset('vendor_assets/admin_lte/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('vendor_assets/admin_lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('vendor_assets/admin_lte/plugins/datatables-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('vendor_assets/admin_lte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vendor_assets/admin_lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    {{-- data table --}}
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        /* $.widget.bridge('uibutton', $.ui.button) */
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('vendor_assets/admin_lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    {{-- <script src="{{ asset('vendor_assets/admin_lte/plugins/chart.js/Chart.min.js') }}"></script> --}}
    <!-- Sparkline -->
    {{-- <script src="{{ asset('vendor_assets/admin_lte/plugins/sparklines/sparkline.js') }}"></script> --}}
    <!-- JQVMap -->
    {{-- <script src="{{ asset('vendor_assets/admin_lte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('vendor_assets/admin_lte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script> --}}
    <!-- jQuery Knob Chart -->
    {{-- <script src="{{ asset('vendor_assets/admin_lte/plugins/jquery-knob/jquery.knob.min.js') }}"></script> --}}
    <!-- daterangepicker -->
    <script src="{{ asset('vendor_assets/admin_lte/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('vendor_assets/admin_lte/plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor_assets/admin_lte/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('vendor_assets/admin_lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('vendor_assets/admin_lte/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('vendor_assets/admin_lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('vendor_assets/admin_lte/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('vendor_assets/admin_lte/js/adminlte.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('vendor_assets/admin_lte/js/pages/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('vendor_assets/admin_lte/js/demo.js') }}"></script>
    <script src="{{ asset('vendor_assets/sark-decimal/sark-decimal.js') }}"></script>
    <script src="{{ asset('vendor_assets/bootstrap_datepicker/bootstrap-datepicker.js') }}"></script>





    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('js')
</body>

</html>


