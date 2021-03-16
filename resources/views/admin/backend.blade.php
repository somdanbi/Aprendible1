<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('glo/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('glo/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('glo/plugins/themify/css/themify.css') }}" rel="stylesheet" type="text/css">

    <!-- Angular Tooltip Css -->
    <link href="{{ asset('glo/plugins/angular-tooltip/angular-tooltips.css') }}" rel="stylesheet">

    <!-- Page level plugin CSS -->
    <link href="{{ asset('glo/plugins/datatables/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <!-- Page level plugin CSS -->
    <link href="{{ asset('glo/dist/css/animate.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('glo/dist/css/glovia.css') }}" rel="stylesheet">
    <link href="{{ asset('glo/dist/css/glovia-responsive.css') }}" rel="stylesheet">

    <!-- Custom styles for Color -->
    <link id="jssDefault" rel="stylesheet" href="{{asset('glo/dist/css/skins/default.css')}}">
</head>

<body class="fixed-nav sticky-footer" id="page-top">

<!-- ===============================
    Navigation Start
====================================-->
<nav class="navbar navbar-expand-lg bb-1 navbar-light br-full-dark bg-dark fixed-top" id="mainNav">

    <!-- Start Header -->
    <header class="header-logo bg-dark bb-1 br-1 br-light-dark">
        <a class="nav-link text-center mr-lg-3 hidden-xs" id="sidenavToggler">
            <i class="ti-align-left"></i>
        </a>
        <a class="gredient-cl navbar-brand" href="/">Admin</a>
    </header>
    <!-- End Header -->

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="ti-align-left"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">









        <!-- =============== Start Side Menu ============== -->
        <div class="navbar-side">
            <ul class="navbar-nav navbar-sidenav bg-light-dark" id="exampleAccordion">

                <!-- Start Dashboard-->
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="admin">
                        <i class="ti i-cl-4 ti-home"></i>
                        <span class="nav-link-text">Inicio</span>
                    </a>
                </li>
                <!-- End Dashboard -->


                <!-- Start Post -->
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tour">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#tour" data-parent="#exampleAccordion">
                        <i class="ti i-cl-4 ti ti-desktop"></i>
                        <span class="nav-link-text">Tour</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="tour">

                        <li>
                            <a href="#">Todo</a>
                        </li>

                        <li>
                            <a href="#">Nuevo</a>
                        </li>

                    </ul>

                </li>
                <!-- Ends Post -->


                <!-- Start Categories -->
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Categories">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#categories" data-parent="#exampleAccordion">
                        <i class="ti i-cl-3 ti ti-desktop"></i>
                        <span class="nav-link-text">Categorias</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="categories">

                        <li>
                            <a href="#">Todo</a>
                        </li>

                        <li>
                            <a href="#">Nuevo</a>
                        </li>

                    </ul>

                </li>
                <!-- Ends Categories -->



                <!-- Start invoice -->
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Invoice">
                    <a class="nav-link" href="/">
                        <i class="ti i-cl-6 ti-eye"></i>
                        <span class="nav-link-text">Pag. Principal</span>
                    </a>
                </li>
                <!-- End Invoice -->

                <!-- Start invoice -->
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Invoice">
                    <a class="nav-link" href="/logout">
                        <i class="ti i-cl-7 ti-power-off"></i>
                        <span class="nav-link-text">Salir</span>
                    </a>
                </li>
                <!-- End Invoice -->



            </ul>
        </div>
        <!-- =============== End Side Menu ============== -->







        <!-- =============== Search Bar ============== -->
        <ul class="navbar-nav ml-left">
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
						<span class="input-group-btn">
							<button class="btn btn-primary" type="button">
							  <i class="ti-search"></i>
							</button>
						</span>
                        <input class="form-control" type="text" placeholder="ingrese un Tour para buscar">
                    </div>
                </form>
            </li>
        </ul>
        <!-- =============== End Search Bar ============== -->












        <!-- =============== Header Rightside Menu ============== -->
        <ul class="navbar-nav ml-auto">

            <!-- Messages -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-3 a-topbar__nav a-nav" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="gredient-cl ti-email"></i>
                    <span class="a-nav__link-badge a-badge a-badge--pink">3</span>
                    <span class="hidden-lg hidden-md mrg-l-10">Nuevas Notificaciones</span>
                </a>
                <div class="dropdown-menu animated flipInX" aria-labelledby="messagesDropdown">
                    <div class="dropdown-header text-center pink-bg">
                        <span class="a-dropdown__header-title">3 Nuevos</span>
                        <span class="a-dropdown__header-subtitle">User Messages</span>
                    </div>
                    <div class="ground-list ground-list-hove" id="message-box">
                        <div class="ground ground-single-list">
                            <a href="#">
                                <img class="ground-avatar" src="{{asset('img/no-avatar.svg')}}" alt="...">
                                <span class="profile-status bg-online pull-right"></span>
                            </a>

                            <div class="ground-content">
                                <h6><a href="#">Maryam Amiri</a></h6>
                                <small class="text-fade">Co-Founder</small>
                            </div>

                            <div class="ground-right">
                                <span class="small">Online</span>
                            </div>
                        </div>

                        <div class="ground ground-single-list">
                            <a href="#">
                                <img class="ground-avatar" src="{{asset('img/no-avatar.svg')}}" alt="...">
                                <span class="profile-status bg-offline pull-right"></span>
                            </a>

                            <div class="ground-content">
                                <h6><a href="#">Maryam Amiri</a></h6>
                                <small class="text-fade">Co-Founder</small>
                            </div>

                            <div class="ground-right">
                                <span class="small">10 Min Ago</span>
                            </div>
                        </div>

                    </div>
                    <a class="dropdown-item view-all" href="#">Ver Todos los Mensajes</a>
                </div>
            </li>
            <!-- End Messages -->

            <!-- Notification -->
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle mr-lg-3 a-topbar__nav a-nav" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="gredient-cl ti-bell"></i>
                    <span class="a-nav__link-badge a-badge a-badge--accent a-animate-blink">6</span>
                    <span class="hidden-lg hidden-md mrg-l-10">Nuevas Notificaciones</span>
                </a>

                <div class="dropdown-menu animated flipInX" aria-labelledby="alertsDropdown">
                    <div class="dropdown-header text-center accent-bg">
                        <span class="a-dropdown__header-title">6 Nuevos</span>
                        <span class="a-dropdown__header-subtitle">User Notificaciones</span>
                    </div>

                    <div class="ground-list ground-list-hove" id="notification-box">
                        <div class="ground ground-single-list">
                            <a href="#">
                                <div class="btn-circle-40 btn-success"><i class="ti-calendar"></i></div>
                            </a>

                            <div class="ground-content">
                                <h6><a href="#">Maryam Amiri</a></h6>
                                <small class="text-fade">Check New Admin Dashboard..</small>
                                <span class="small">Just Now</span>
                            </div>
                        </div>

                        <div class="ground ground-single-list">
                            <a href="#">
                                <div class="btn-circle-40 btn-danger"><i class="ti-calendar"></i></div>
                            </a>

                            <div class="ground-content">
                                <h6><a href="#">Maryam Amiri</a></h6>
                                <small class="text-fade">You can Customize..</small>
                                <span class="small">02 Min Ago</span>
                            </div>
                        </div>

                    </div>
                    <a class="dropdown-item view-all" href="#">View all Notificaciones</a>
                </div>
            </li>
            <!-- End Notification -->



            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-0 user-img a-topbar__nav a-nav" id="userDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('img/git-user.png')}}" alt="user-img" width="36" class="img-circle">
                    <b class="f-size-17">Admin</b>
                </a>

                <ul class="dropdown-menu dropdown-user animated flipInX" aria-labelledby="userDropdown">
                    <li class="dropdown-header green-bg">
                        <div class="header-user-pic">
                            <img src="{{asset('img/git-user.png')}}" alt="user-img" width="36" class="img-circle">
                        </div>
                        <div class="header-user-det">
                            <span class="a-dropdown__header-title">Admin</span>
                            <span class="a-dropdown__header-subtitle">Programmer / UX Expert</span>
                        </div>
                    </li>
                    <li><a class="dropdown-item" href="#"><i class="ti-user"></i> My Profile</a></li>
                    <li><a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a></li>
                    <li><a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Setting</a></li>
                    <li><a class="dropdown-item" href="/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- =============== End Header Rightside Menu ============== -->
    </div>
</nav>
<!-- =====================================================
                    End Navigations
======================================================= -->








<!-- =========================================================
    Content Wrapper Starts
============================================================ -->

@yield('content')

<!-- =========================================================
    Content Wrapper Ends
============================================================ -->

</body>

</html>