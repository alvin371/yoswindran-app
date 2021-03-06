<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{asset('css/img/icon.png')}}" rel="icon">
    <title>@yield('title') | Dashboard Admin</title>

    <!-- Custom fonts for this template -->
    <link href="{{asset('css/Admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/Admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.8.1/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" />
    <!-- Custom styles for this page -->
    <link href="{{asset('css/Admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('js/dropzone/dist/dropzone.css')}}">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/')}}">
                <div class="sidebar-brand-text mx-3">Member Area</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('/profile')}}">
                    <i class="fas fa-fw fa-newspaper"></i>
                    <span>PROFILE</span>
                </a>
            </li>
            @if((auth()->user()->level == "superadmin") || (auth()->user()->level == "member") || (auth()->user()->level == "admin1") || (auth()->user()->level == "admin2") || (auth()->user()->level == "asesor") || (auth()->user()->level == "facilitator") || (auth()->user()->level == "trainer"))
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('/member')}}">
                    <i class="fas fa-calendar-day"></i>
                    <span>MEMBER</span>
                </a>
            </li>
            @endif
            <!-- Nav Item - Pages Collapse Menu -->
            @if((auth()->user()->level == "superadmin") || (auth()->user()->level == "asesor") )
            <li class="nav-item">
                <a class="nav-link" href="{{url('/asesor')}}">
                    <i class="fas fa-store fa-folder"></i>
                    <span>ASESOR</span>
                </a>
            </li>
            @endif
            <!-- Nav Item - Charts -->
            @if((auth()->user()->level == "superadmin") || (auth()->user()->level == "facilitator") )
            <li class="nav-item">
                <a class="nav-link" href="{{url('/facilitator')}}">
                    <i class="fas fa-user-cog fa-chart-area"></i>
                    <span>FACILITATOR</span></a>
            </li>
            @endif
            <!-- Nav Item - Tables -->
            @if((auth()->user()->level == "superadmin") || (auth()->user()->level == "trainer") )
            <li class="nav-item">
                <a class="nav-link" href="{{url('/trainer')}}">
                    <i class="fas fa-users "></i>
                    <span>TRAINER</span></a>
            </li>
            @endif
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">
                    <i class="fas fa-home"></i>
                    <span>HOME</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/services')}}">
                    <i class="fas fa-home"></i>
                    <span>SERVICES</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/blog')}}">
                    <i class="fas fa-home"></i>
                    <span>BLOG</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/companyProfile')}}">
                    <i class="fas fa-home"></i>
                    <span>COMPANY PROFILE</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">

            @if((auth()->user()->level == "superadmin") || (auth()->user()->level == "admin1") )
            <li class="nav-item">
                <a class="nav-link" href="{{url('/servicesManagement')}}">
                    <i class="fas fa-tools"></i>
                    <span>SERVICES MANAGEMENT</span></a>
            </li>
            @endif
            @if((auth()->user()->level == "superadmin") || (auth()->user()->level == "admin2"))
            <li class="nav-item">
                <a class="nav-link" href="{{url('/blogManagement')}}">
                    <i class="fas fa-tools"></i>
                    <span>BLOG MANAGEMENT</span></a>
            </li>
            @endif
            @if((auth()->user()->level == "superadmin"))
            <li class="nav-item">
                <a class="nav-link" href="{{url('/companyProfileManagement')}}">
                    <i class="fas fa-tools"></i>
                    <span>COMPANY PROFILE MANAGEMENT</span></a>
            </li>
            @endif
            @if((auth()->user()->level == "superadmin")  || (auth()->user()->level == "admin1"))
            <li class="nav-item">
                <a class="nav-link" href="{{url('/account')}}">
                    <i class="fas fa-tools"></i>
                    <span>ACCOUNT MANAGEMENT</span></a>
            </li>
            @endif
            @if((auth()->user()->level == "superadmin"))
            <li class="nav-item">
                <a class="nav-link" href="{{url('/photogallery')}}">
                    <i class="fas fa-tools"></i>
                    <span>PHOTO GALLERY</span></a>
            </li>
            @endif
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{auth()->user()->name}}</span>
                                <img class="img-profile rounded-circle" src="{{asset('css/Admin/img/undraw_profile.svg')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{url('/profile')}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                @yield('container')

                