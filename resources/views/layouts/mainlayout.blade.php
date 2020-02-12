<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/images/agraria.png')}}" width="80%">
    <title>Admin Kpb</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ url('assets/node_modules/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{ url('assets/node_modules/morrisjs/morris.css')}}" rel="stylesheet">
    <!--c3 CSS -->
    <link href="{{ url('assets/node_modules/c3-master/c3.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{  url('css/style.css')}}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{ url('css/pages/dashboard1.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ url('css/colors/default.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin</p>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="assets/images/agraria.png" alt="homepage" width="40%" class="dark-logo" /> -->
                            <!-- Light Logo icon -->
                            <!-- <img src="{{ url('assets/images/logo-light-icon.png')}}" alt="homepage" class="light-logo" /> -->
                            <img src="{{ url('assets/images/agraria.png')}}" alt="homepage" width="40%" class="dark-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <!-- Light Logo text -->    
                         <!-- <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a> -->
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <!-- <li class="nav-item hidden-xs-down search-box"> <a class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="fa fa-times"></i></a></form>
                        </li> -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <!-- <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="" /> <span class="hidden-md-down">Mark Sanders &nbsp;</span> </a> -->
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li>
                          <a class="waves-effect waves-dark" href="{{ route('home') }}" aria-expanded="false">
                            <i class="fa fa-tachometer"></i>
                            <span class="hide-menu">Dashboard</span>
                          </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="{{ route('forminputpetani') }}" aria-expanded="false">
                                <i class="fa fa-user"></i>
                                <span class="hide-menu">Input Akun Petani</span>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="{{ route('showRDKK')}}" aria-expanded="false">
                                <i class="fa fa-table"></i>
                                <span class="hide-menu">Data RDKK</span>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="{{ route('showRUT') }}" aria-expanded="false">
                                <i class="fa fa-table"></i><span class="hide-menu">Data RUT</span>
                            </a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="icon-fontawesome.html" aria-expanded="false"><i class="fa fa-smile-o"></i><span class="hide-menu">Icons</span></a>
                        </li>
                        <!-- <li> <a class="waves-effect waves-dark" href="map-google.html" aria-expanded="false"><i class="fa fa-globe"></i><span class="hide-menu">Map</span></a>
                        </li> -->
                        <!-- <li> <a class="waves-effect waves-dark" href="pages-blank.html" aria-expanded="false"><i class="fa fa-bookmark-o"></i><span class="hide-menu">Blank</span></a>
                        </li> -->
                        <!-- <li> <a class="waves-effect waves-dark" href="pages-error-404.html" aria-expanded="false"><i class="fa fa-question-circle"></i><span class="hide-menu">404</span></a>
                        </li> -->
                    </ul>
                    <div class="text-center m-t-30">
                        <!-- <a href="https://wrappixel.com/templates/adminwrap/" class="btn waves-effect waves-light btn-info hidden-md-down"> Upgrade to Pro</a> -->
                    </div>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

@yield('content')

<!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2020 Admin Kartu Petani Berjaya </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script type="text/javascript" language="javascript">
        function konfirmasi () {
            var pilihan = confirm ("Apakah Anda Yakin Menghapus Data ?");
            if(pilihan){
                return true
                }else{
                alert ("Proses Di Batalkan")
                return false
                }
        }
    </script>
    <script src="{{ url('assets/node_modules/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{ url('assets/node_modules/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ url('assets/node_modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ url('js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ url('js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ url('js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ url('js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="{{ url('assets/node_modules/raphael/raphael-min.js')}}"></script>
    <script src="{{ url('assets/node_modules/morrisjs/morris.min.js')}}"></script>
    <!--c3 JavaScript -->
    <script src="{{ url('assets/node_modules/d3/d3.min.js')}}"></script>
    <script src="{{ url('assets/node_modules/c3-master/c3.min.js')}}"></script>
    <!-- Chart JS -->
    <script src="{{ url('js/dashboard1.js')}}"></script>
</body>

</html>