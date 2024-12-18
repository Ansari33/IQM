<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png ') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/select2/dist/css/select2.min.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/jquery-minicolors/jquery.minicolors.css ') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css ') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.min.css ') }}"  rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon ps-2">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('assets/images/logo-icon.png ') }}" alt="homepage" class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="{{ asset('assets/images/logo-text.png ') }}" alt="homepage" class="light-logo" />

                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="{{ asset('assets/images/logo-text.png ') }}" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                                <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-bell font-24"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                 <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i
                                                            class="ti-calendar"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Event today</h5>
                                                        <span class="mail-desc">Just a reminder that event</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-info btn-circle"><i
                                                            class="ti-settings"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Settings</h5>
                                                        <span class="mail-desc">You can customize this template</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-primary btn-circle"><i
                                                            class="ti-user"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Pavan kumar</h5>
                                                        <span class="mail-desc">Just see the my admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle"><i
                                                            class="fa fa-link"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Luanch Admin</h5>
                                                        <span class="mail-desc">Just see the my new admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('assets/images/users/1.jpg ') }}"  alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user me-1 ms-1"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet me-1 ms-1"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email me-1 ms-1"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="ti-settings me-1 ms-1"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i
                                        class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="ps-4 p-10"><a href="javascript:void(0)"
                                        class="btn btn-sm btn-success btn-rounded text-white">View Profile</a></div>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
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
        @include('aside')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Laporan</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                {{-- <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol> --}}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Jenis Laporan</h4>
                            </div>
                            <div class="comment-widgets scrollable">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row mt-0">
                                    <div class="p-2"><img src="{{ asset('assets/images/users/1.jpg ') }}"  alt="user" width="50"
                                            class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Laporan Stok</h6>
                                        <span class="mb-3 d-block">Print Semua Data Stok. </span>
                                        <div class="comment-footer">
                                            
                                            <button type="button" class="btn btn-cyan btn-sm text-white">Tampilkan</button>
                                            <button type="button" class="btn btn-success btn-sm text-white">Excel</button>
                                            <button type="button" class="btn btn-danger btn-sm text-white">PDF</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="{{ asset('assets/images/users/1.jpg ') }}"  alt="user" width="50"
                                            class="rounded-circle"></div>
                                    <div class="comment-text active w-100">
                                        <h6 class="font-medium">Laporan Stok Per Barang</h6>
                                        <span class="mb-3 d-block">Menampilkan Laporan Stok Untuk Setiap Barang. </span>
                                        <div class="comment-footer">
                                            <div class="form-group row">
                                                <label class="col-md-1  text-end control-label col-form-label">Pilih Barang</label>
                                                <div class="col-md-5">
                                                    <select class="select2 form-select shadow-none"
                                                        style="width: 100%; height:36px;" name="stok">
                                                      
                                                        <optgroup label="Pilih Merk">
                                                            @foreach ($stok as $item)
                                                            <option value="{{ $item['id']}}"> {{ $item['merk'] == null ? ' ' : $item['merk']['nama']  .' - '.$item['nama'] }} </option> 
                                                            @endforeach  
                                                        </optgroup>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-cyan btn-sm text-white">Tampilkan</button>
                                            <button type="button" class="btn btn-success btn-sm text-white">Excel</button>
                                            <button type="button" class="btn btn-danger btn-sm text-white">PDF</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="{{ asset('assets/images/users/1.jpg ') }}"  alt="user" width="50"
                                            class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Laporan Stok Per Tanggal</h6>
                                        <span class="mb-3 d-block">Menampikan Jumlah Stok Pada Range Tanggal. </span>
                                        <div class="comment-footer">
                                            <div class="form-group row">
                                                <label for="fname"
                                                    class="col-sm-1 text-end control-label col-form-label">Tanggal Awal</label>
                                                <div class="col-sm-3">
                                                    <div class="input-group">
                                                        <input type="text" name="tanggal" class="form-control mydatepicker" placeholder="mm/dd/yyyy">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label for="fname"
                                                    class="col-sm-1 text-end control-label col-form-label">Tanggal Akhir</label>
                                                <div class="col-sm-3">
                                                    <div class="input-group">
                                                        <input type="text" name="tanggal" class="form-control mydatepicker" placeholder="mm/dd/yyyy">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <button type="button" class="btn btn-cyan btn-sm text-white">Tampilkan</button>
                                            <button type="button" class="btn btn-success btn-sm text-white">Excel</button>
                                            <button type="button" class="btn btn-danger btn-sm text-white">PDF</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="{{ asset('assets/images/users/1.jpg ') }}"  alt="user" width="50"
                                            class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Laporan Stok Per Barang & Tanggal</h6>
                                        <span class="mb-3 d-block">Menampilkan Data Suatu Barang Pada Range Tanggal. </span>
                                        <div class="comment-footer">
                                            <div class="form-group row">
                                                <label class="col-md-1  text-end control-label col-form-label">Pilih Barang</label>
                                                <div class="col-md-3">
                                                    <select class="select2 form-select shadow-none"
                                                        style="width: 100%; height:36px;" name="stok">
                                                      
                                                        <optgroup label="Pilih Merk">
                                                            @foreach ($stok as $item)
                                                            <option value="{{ $item['id']}}"> {{ $item['merk'] == null ? ' ' : $item['merk']['nama']  .' - '.$item['nama'] }} </option> 
                                                            @endforeach  
                                                        </optgroup>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fname"
                                                    class="col-md-1 text-end control-label col-form-label">Tanggal Awal</label>
                                                <div class="col-md-3">
                                                    <div class="input-group">
                                                        <input type="text" name="tanggal" class="form-control mydatepicker" placeholder="mm/dd/yyyy">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label for="fname"
                                                    class="col-md-1 text-end control-label col-form-label">Tanggal Akhir</label>
                                                <div class="col-md-3">
                                                    <div class="input-group">
                                                        <input type="text" name="tanggal" class="form-control mydatepicker" placeholder="mm/dd/yyyy">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-cyan btn-sm text-white">Tampilkan</button>
                                            <button type="button" class="btn btn-success btn-sm text-white">Excel</button>
                                            <button type="button" class="btn btn-danger btn-sm text-white">PDF</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- column -->

                    {{-- <div class="col-lg-6">
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Chat Option</h4>
                                <div class="chat-box scrollable" style="height:475px;">
                                    <!--chat Row -->
                                    <ul class="chat-list">
                                        <!--chat Row -->
                                        <li class="chat-item">
                                            <div class="chat-img"><img src="{{ asset('assets/images/users/1.jpg ') }}"  alt="user">
                                            </div>
                                            <div class="chat-content">
                                                <h6 class="font-medium">James Anderson</h6>
                                                <div class="box bg-light-info">Lorem Ipsum is simply dummy text of the
                                                    printing &amp; type setting industry.</div>
                                            </div>
                                            <div class="chat-time">10:56 am</div>
                                        </li>
                                        <!--chat Row -->
                                        <li class="chat-item">
                                            <div class="chat-img"><img src="{{ asset('assets/images/users/2.jpg ') }}"  alt="user">
                                            </div>
                                            <div class="chat-content">
                                                <h6 class="font-medium">Bianca Doe</h6>
                                                <div class="box bg-light-info">It’s Great opportunity to work.</div>
                                            </div>
                                            <div class="chat-time">10:57 am</div>
                                        </li>
                                        <!--chat Row -->
                                        <li class="odd chat-item">
                                            <div class="chat-content">
                                                <div class="box bg-light-inverse">I would love to join the team.</div>
                                                <br>
                                            </div>
                                        </li>
                                        <!--chat Row -->
                                        <li class="odd chat-item">
                                            <div class="chat-content">
                                                <div class="box bg-light-inverse">Whats budget of the new project.</div>
                                                <br>
                                            </div>
                                            <div class="chat-time">10:59 am</div>
                                        </li>
                                        <!--chat Row -->
                                        <li class="chat-item">
                                            <div class="chat-img"><img src="{{ asset('assets/images/users/3.jpg ') }}"  alt="user">
                                            </div>
                                            <div class="chat-content">
                                                <h6 class="font-medium">Angelina Rhodes</h6>
                                                <div class="box bg-light-info">Well we have good budget for the project
                                                </div>
                                            </div>
                                            <div class="chat-time">11:00 am</div>
                                        </li>
                                        <!--chat Row -->
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body border-top">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="input-field mt-0 mb-0">
                                            <textarea id="textarea1" placeholder="Type and enter"
                                                class="form-control border-0"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <a class="btn-circle btn-lg btn-cyan float-end text-white"
                                            href="javascript:void(0)"><i class="fas fa-paper-plane"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Our partner (Box with Fix height)</h4>
                            </div>
                            <div class="comment-widgets scrollable" style="max-height: 130px;">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row mt-0">
                                    <div class="p-2"><img src="{{ asset('assets/images/users/1.jpg ') }}"  alt="user" width="50"
                                            class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">James Anderson</h6>
                                        <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and type setting industry. </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">April 14, 2021</span>
                                            <button type="button" class="btn btn-cyan btn-sm text-white">Edit</button>
                                            <button type="button" class="btn btn-success btn-sm text-white">Publish</button>
                                            <button type="button" class="btn btn-danger btn-sm text-white">Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="{{ asset('assets/images/users/4.jpg ') }}"  alt="user" width="50"
                                            class="rounded-circle"></div>
                                    <div class="comment-text active w-100">
                                        <h6 class="font-medium">Michael Jorden</h6>
                                        <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and type setting industry. </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">May 10, 2021</span>
                                            <button type="button" class="btn btn-cyan btn-sm text-white">Edit</button>
                                            <button type="button" class="btn btn-success btn-sm text-white">Publish</button>
                                            <button type="button" class="btn btn-danger btn-sm text-white">Delete</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="{{ asset('assets/images/users/5.jpg ') }}"  alt="user" width="50"
                                            class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Johnathan Doeting</h6>
                                        <span class="mb-3 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and type setting industry. </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-end">August 1, 2021</span>
                                            <button type="button" class="btn btn-cyan btn-sm text-white">Edit</button>
                                            <button type="button" class="btn btn-success btn-sm text-white">Publish</button>
                                            <button type="button" class="btn btn-danger btn-sm text-white">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- accoridan part -->
                        <div class="accordion" id="accordionExample">
                            <div class="card mb-0">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <i class="me-1 fa fa-magnet" aria-hidden="true"></i>
                                            <span>Accordion Example 1</span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0 border-top">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="me-1 fa fa-magnet" aria-hidden="true"></i>
                                            <span>Accordion Example 2</span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0 border-top">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" data-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            <i class="me-1 fa fa-magnet" aria-hidden="true"></i>
                                            <span>Accordion Example 3</span>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                        brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                        sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                        cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- toggle part -->
                        <div id="accordian-4">
                            <div class="card mt-4">
                                <a class="card-header link" data-toggle="collapse" data-parent="#accordian-4"
                                    href="#Toggle-1" aria-expanded="true" aria-controls="Toggle-1">
                                    <i class="seticon fa fa-arrow-right" aria-hidden="true"></i>
                                    <span>Toggle, Open by default</span>
                                </a>
                                <div id="Toggle-1" class="collapse show multi-collapse">
                                    <div class="card-body widget-content">
                                        This box is opened by default, paragraphs and is full of waffle to pad out the
                                        comment. Usually, you just wish these sorts of comments would come to an end.
                                    </div>
                                </div>
                                <a class="card-header link border-top" data-toggle="collapse" data-parent="#accordian-4"
                                    href="#Toggle-2" aria-expanded="false" aria-controls="Toggle-2">
                                    <i class="seticon fa fa-times" aria-hidden="true"></i>
                                    <span>Toggle, Closed by default</span>
                                </a>
                                <div id="Toggle-2" class="multi-collapse collapse" style="">
                                    <div class="card-body widget-content">
                                        This box is now open
                                    </div>
                                </div>
                                <a class="card-header collapsed link border-top" data-toggle="collapse"
                                    data-parent="#accordian-4" href="#Toggle-3" aria-expanded="false"
                                    aria-controls="Toggle-3">
                                    <i class="seticon fa fa-times" aria-hidden="true"></i>
                                    <span>Toggle, Closed by default</span>
                                </a>
                                <div id="Toggle-3" class="collapse multi-collapse">
                                    <div class="card-body widget-content">
                                        This box is now open
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tabs -->
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#home"
                                        role="tab"><span class="hidden-sm-up"></span> <span
                                            class="hidden-xs-down">Tab1</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#profile"
                                        role="tab"><span class="hidden-sm-up"></span> <span
                                            class="hidden-xs-down">Tab2</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#messages"
                                        role="tab"><span class="hidden-sm-up"></span> <span
                                            class="hidden-xs-down">Tab3</span></a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content tabcontent-border">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="p-20">
                                        <p>And is full of waffle to It has multiple paragraphs and is full of waffle to
                                            pad out the comment. Usually, you just wish these sorts of comments would
                                            come to an end.multiple paragraphs and is full of waffle to pad out the
                                            comment..</p>
                                        <img src="{{ asset('assets/images/background/img4.jpg ') }}"  class="img-fluid">
                                    </div>
                                </div>
                                <div class="tab-pane  p-20" id="profile" role="tabpanel">
                                    <div class="p-20">
                                        <img src="{{ asset('assets/images/background/img4.jpg ') }}"  class="img-fluid">
                                        <p class="mt-2">And is full of waffle to It has multiple paragraphs and is
                                            full of waffle to pad out the comment. Usually, you just wish these sorts of
                                            comments would come to an end.multiple paragraphs and is full of waffle to
                                            pad out the comment..</p>
                                    </div>
                                </div>
                                <div class="tab-pane p-20" id="messages" role="tabpanel">
                                    <div class="p-20">
                                        <p>And is full of waffle to It has multiple paragraphs and is full of waffle to
                                            pad out the comment. Usually, you just wish these sorts of comments would
                                            come to an end.multiple paragraphs and is full of waffle to pad out the
                                            comment..</p>
                                        <img src="{{ asset('assets/images/background/img4.jpg ') }}"  class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                Developed by SIT Insan Qur'ani Mulia Bima, Template  by <a href="https://www.wrappixel.com">WrapPixel</a> 
            </footer>
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
   @include('jquery')
   <script src="{{ asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
   <script src="{{ asset('assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/libs/select2/dist/js/select2.min.js') }}"></script>
    <script>
        $(".select2").select2();
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });

       
    </script>

</body>

</html>