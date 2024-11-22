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
    <title>Dashboard IQM</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png ') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/libs/flot/css/float-chart.css ') }}"  rel="stylesheet">
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
                    @include('logo')
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i>wewre</a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                @include('navbar-collapse')
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
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                                    {{-- <li class="breadcrumb-item active" aria-current="page">Library</li> --}}
                                </ol>
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
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-account-star"></i></h1>
                                <h6 class="text-white">{{ $data['siswa'] }} Peserta Didik</h6>
                                {{-- <small class="text-white">Peserta Didik</small> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-account-box"></i></h1>
                                <h6 class="text-white">{{ $data['guru'] }} Guru</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                                <h6 class="text-white">{{ $data['kelas'] }} Kelas </h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-cart"></i></h1>
                                <h6 class="text-white">Rp.{{ number_format($data['pengeluaran'])}} Total Pengeluaran</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-cash-multiple"></i></h1>
                                <h6 class="text-white">Rp.{{ number_format($data['pemasukkan'])}} Total Pemasukkan</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    {{-- <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                                <h6 class="text-white">Forms</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-relative-scale"></i></h1>
                                <h6 class="text-white">Buttons</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                                <h6 class="text-white">Elements</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-calendar-check"></i></h1>
                                <h6 class="text-white">Calnedar</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-alert"></i></h1>
                                <h6 class="text-white">Errors</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column --> --}}
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Chart Kelas Siswa Tahun Ajaran Ini</h5>
                                <div class="pie" style="height: 400px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"> Chart Perkembangan Jumlah Peserta Didik</h5>
                                <div id="placeholder" style="height: 400px;"></div>
                                <p id="choices" class="mt-3"></p>
                            </div>
                        </div>
                    </div>
                </div>
             
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Site Analysis</h4>
                                        <h5 class="card-subtitle">Overview of Latest Month</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- column -->
                                    {{-- <div class="col-lg-9">
                                        <div class="flot-chart">
                                            <div class="flot-chart-content" id="flot-line-chart"></div>
                                        </div>
                                    </div> --}}
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-user mb-1 font-16"></i>
                                                    <h5 class="mb-0 mt-1">2540</h5>
                                                    <small class="font-light">Total Users</small>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-plus mb-1 font-16"></i>
                                                    <h5 class="mb-0 mt-1">120</h5>
                                                    <small class="font-light">New Users</small>
                                                </div>
                                            </div>
                                            <div class="col-6 mt-3">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-cart-plus mb-1 font-16"></i>
                                                    <h5 class="mb-0 mt-1">656</h5>
                                                    <small class="font-light">Total Shop</small>
                                                </div>
                                            </div>
                                            <div class="col-6 mt-3">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-tag mb-1 font-16"></i>
                                                    <h5 class="mb-0 mt-1">9540</h5>
                                                    <small class="font-light">Total Orders</small>
                                                </div>
                                            </div>
                                            <div class="col-6 mt-3">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-table mb-1 font-16"></i>
                                                    <h5 class="mb-0 mt-1">100</h5>
                                                    <small class="font-light">Pending Orders</small>
                                                </div>
                                            </div>
                                            <div class="col-6 mt-3">
                                                <div class="bg-dark p-10 text-white text-center">
                                                    <i class="fa fa-globe mb-1 font-16"></i>
                                                    <h5 class="mb-0 mt-1">8540</h5>
                                                    <small class="font-light">Online Orders</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Latest Posts</h4>
                            </div>
                            <div class="comment-widgets scrollable">
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
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">To Do List</h4>
                                <div class="todo-widget scrollable" style="height:450px;">
                                    <ul class="list-task todo-list list-group mb-0" data-role="tasklist">
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck">
                                                <label class="form-check-label w-100 mb-0 todo-label" for="customCheck">
                                                    <span class="todo-desc fw-normal">Lorem Ipsum is simply dummy text of the
                                                        printing and typesetting industry.</span> <span
                                                        class="badge rounded-pill bg-danger float-end">Today</span>
                                                </label>
                                            </div>
                                            <ul class="list-style-none assignedto">
                                                <li class="assignee"><img class="rounded-circle" width="40"
                                                        src="{{ asset('assets/images/users/1.jpg ') }}"  alt="user"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Steave"></li>
                                                <li class="assignee"><img class="rounded-circle" width="40"
                                                        src="{{ asset('assets/images/users/2.jpg ') }}"  alt="user"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Jessica"></li>
                                                <li class="assignee"><img class="rounded-circle" width="40"
                                                        src="{{ asset('assets/images/users/3.jpg ') }}"  alt="user"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Priyanka"></li>
                                                <li class="assignee"><img class="rounded-circle" width="40"
                                                        src="{{ asset('assets/images/users/4.jpg ') }}"  alt="user"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Selina"></li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label class="form-check-label w-100 mb-0 todo-label" for="customCheck1">
                                                    <span class="todo-desc fw-normal">Lorem Ipsum is simply dummy text of the
                                                        printing</span><span
                                                        class="badge rounded-pill bg-primary float-end">1 week
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="item-date"> 26 jun 2021</div>
                                        </li>
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label w-100 mb-0 todo-label" for="customCheck2">
                                                    <span class="todo-desc fw-normal">Give Purchase report to</span> <span
                                                        class="badge rounded-pill bg-info float-end">Yesterday</span>
                                                </label>
                                            </div>
                                            <ul class="list-style-none assignedto">
                                                <li class="assignee"><img class="rounded-circle" width="40"
                                                        src="{{ asset('assets/images/users/3.jpg ') }}"  alt="user"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Priyanka"></li>
                                                <li class="assignee"><img class="rounded-circle" width="40"
                                                        src="{{ asset('assets/images/users/4.jpg ') }}"  alt="user"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Selina"></li>
                                            </ul>
                                        </li>
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck3">
                                                <label class="form-check-label w-100 mb-0 todo-label" for="customCheck3">
                                                    <span class="todo-desc fw-normal">Lorem Ipsum is simply dummy text of the
                                                        printing </span> <span
                                                        class="badge rounded-pill bg-warning float-end">2
                                                        weeks</span>
                                                </label>
                                            </div>
                                            <div class="item-date"> 26 jun 2021</div>
                                        </li>
                                        <li class="list-group-item todo-item" data-role="task">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck4">
                                                <label class="form-check-label w-100 mb-0 todo-label" for="customCheck4">
                                                    <span class="todo-desc fw-normal">Give Purchase report to</span> <span
                                                        class="badge rounded-pill bg-info float-end">Yesterday</span>
                                                </label>
                                            </div>
                                            <ul class="list-style-none assignedto">
                                                <li class="assignee"><img class="rounded-circle" width="40"
                                                        src="{{ asset('assets/images/users/3.jpg ') }}"  alt="user"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Priyanka"></li>
                                                <li class="assignee"><img class="rounded-circle" width="40"
                                                        src="{{ asset('assets/images/users/4.jpg ') }}"  alt="user"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Selina"></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-0">Progress Box</h4>
                                <div class="mt-3">
                                    <div class="d-flex no-block align-items-center">
                                        <span>81% Clicks</span>
                                        <div class="ms-auto">
                                            <span>125</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped" role="progressbar"
                                            style="width: 81%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex no-block align-items-center mt-4">
                                        <span>72% Uniquie Clicks</span>
                                        <div class="ms-auto">
                                            <span>120</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 72%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex no-block align-items-center mt-4">
                                        <span>53% Impressions</span>
                                        <div class="ms-auto">
                                            <span>785</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar"
                                            style="width: 53%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex no-block align-items-center mt-4">
                                        <span>3% Online Users</span>
                                        <div class="ms-auto">
                                            <span>8</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                            style="width: 3%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card new -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-0">News Updates</h4>
                            </div>
                            <ul class="list-style-none">
                                <li class="d-flex no-block card-body">
                                    <i class="fa fa-check-circle w-30px mt-1"></i>
                                    <div>
                                        <a href="#" class="mb-0 font-medium p-0">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit.</a>
                                        <span class="text-muted">dolor sit amet, consectetur adipiscing</span>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="tetx-right">
                                            <h5 class="text-muted mb-0">20</h5>
                                            <span class="text-muted font-16">Jan</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex no-block card-body border-top">
                                    <i class="fa fa-gift w-30px mt-1"></i>
                                    <div>
                                        <a href="#" class="mb-0 font-medium p-0">Congratulation Maruti, Happy
                                            Birthday</a>
                                        <span class="text-muted">many many happy returns of the day</span>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="tetx-right">
                                            <h5 class="text-muted mb-0">11</h5>
                                            <span class="text-muted font-16">Jan</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex no-block card-body border-top">
                                    <i class="fa fa-plus w-30px mt-1"></i>
                                    <div>
                                        <a href="#" class="mb-0 font-medium p-0">Maruti is a Responsive Admin theme</a>
                                        <span class="text-muted">But already everything was solved. It will ...</span>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="tetx-right">
                                            <h5 class="text-muted mb-0">19</h5>
                                            <span class="text-muted font-16">Jan</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex no-block card-body border-top">
                                    <i class="fa fa-leaf w-30px mt-1"></i>
                                    <div>
                                        <a href="#" class="mb-0 font-medium p-0">Envato approved Maruti Admin
                                            template</a>
                                        <span class="text-muted">i am very happy to approved by TF</span>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="tetx-right">
                                            <h5 class="text-muted mb-0">20</h5>
                                            <span class="text-muted font-16">Jan</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex no-block card-body border-top">
                                    <i class="fa fa-question-circle w-30px mt-1"></i>
                                    <div>
                                        <a href="#" class="mb-0 font-medium p-0"> I am alwayse here if you have any
                                            question</a>
                                        <span class="text-muted">we glad that you choose our template</span>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="tetx-right">
                                            <h5 class="text-muted mb-0">15</h5>
                                            <span class="text-muted font-16">Jan</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- column -->

                    <div class="col-lg-6">
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
                    </div>
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
   <script src="{{asset('assets/libs/chart/matrix.interface.js')}}"></script>
    
    <script src="{{asset('assets/libs/chart/jquery.peity.min.js')}}"></script>
    {{-- <script src="{{asset('assets/libs/chart/matrix.charts.js')}}"></script> --}}
    <script src="{{asset('assets/libs/chart/jquery.flot.pie.min.js')}}"></script>
    {{-- <script src="{{asset('assets/libs/chart/turning-series.js')}}"></script> --}}

    <script>
        var data = {!! json_encode($data['kelas siswa']) !!};
	
	
    var pie = $.plot($(".pie"), data,{
        series: {
            pie: {
                show: true,
                radius: 3/4,
                label: {
                    show: true,
                    radius: 3/4,
                    formatter: function(label, series){
                        return '<div style="font-size:8pt;text-align:center;padding:2px;color:white;">'+label+'<br/>'+Math.round(series.percent)+'%</div>';
                    },
                    background: {
                        opacity: 0.5,
                        color: '#000'
                    }
                },
                innerRadius: 0.2
            },
			legend: {
				show: false
			}
		}
	});	
    var d1 = [
        
        ['2021' , 30],
        ['2022' , 40],
        ['2023' , 50],
    ];
    //for (var i = 0; i <= 10; i += 1) d1.push([i, parseInt(Math.random() * 30)]);

	var data = new Array(); 
	data.push({
		data:d1,
        bars: {
            show: true, 
            barWidth: 0.1, 
            order: 1000,
        }
    });    
	
	
    //Display graph
    var bar = $.plot($(".bars"), data, {
		legend: true,
        color: "#7b2b2b"
	});

    var datasets = {
        "siswa": {
            label: "SISWA",
            color: "#005CDE",
            // data: [
            //   [1988, 218000],
            //   [1989, 218300],
            // ]

            data: {!! json_encode($data['perkembangan siswa']) !!}
        },
        // "russia": {
        //     label: "Russia",
        //     data: [
        //         [1988, 218000],
        //         [1989, 203000],
        //         [1990, 171000],
        //         [1992, 42500],
        //         [1993, 37600],
        //         [1994, 36600],
        //         [1995, 21700],
        //         [1996, 19200],
        //         [1997, 21300],
        //         [1998, 13600],
        //         [1999, 14000],
        //         [2000, 19100],
        //         [2001, 21300],
        //         [2002, 23600],
        //         [2003, 25100],
        //         [2004, 26100],
        //         [2005, 31100],
        //         [2006, 34700]
        //     ]
        // },
        // "uk": {
        //     label: "UK",
        //     data: [
        //         [1988, 62982],
        //         [1989, 62027],
        //         [1990, 60696],
        //         [1991, 62348],
        //         [1992, 58560],
        //         [1993, 56393],
        //         [1994, 54579],
        //         [1995, 50818],
        //         [1996, 50554],
        //         [1997, 48276],
        //         [1998, 47691],
        //         [1999, 47529],
        //         [2000, 47778],
        //         [2001, 48760],
        //         [2002, 50949],
        //         [2003, 57452],
        //         [2004, 60234],
        //         [2005, 60076],
        //         [2006, 59213]
        //     ]
        // },
        // "germany": {
        //     label: "Germany",
        //     data: [
        //         [1988, 55627],
        //         [1989, 55475],
        //         [1990, 58464],
        //         [1991, 55134],
        //         [1992, 52436],
        //         [1993, 47139],
        //         [1994, 43962],
        //         [1995, 43238],
        //         [1996, 42395],
        //         [1997, 40854],
        //         [1998, 40993],
        //         [1999, 41822],
        //         [2000, 41147],
        //         [2001, 40474],
        //         [2002, 40604],
        //         [2003, 40044],
        //         [2004, 38816],
        //         [2005, 38060],
        //         [2006, 36984]
        //     ]
        // },
        // "denmark": {
        //     label: "Denmark",
        //     data: [
        //         [1988, 3813],
        //         [1989, 3719],
        //         [1990, 3722],
        //         [1991, 3789],
        //         [1992, 3720],
        //         [1993, 3730],
        //         [1994, 3636],
        //         [1995, 3598],
        //         [1996, 3610],
        //         [1997, 3655],
        //         [1998, 3695],
        //         [1999, 3673],
        //         [2000, 3553],
        //         [2001, 3774],
        //         [2002, 3728],
        //         [2003, 3618],
        //         [2004, 3638],
        //         [2005, 3467],
        //         [2006, 3770]
        //     ]
        // },
        // "sweden": {
        //     label: "Sweden",
        //     data: [
        //         [1988, 6402],
        //         [1989, 6474],
        //         [1990, 6605],
        //         [1991, 6209],
        //         [1992, 6035],
        //         [1993, 6020],
        //         [1994, 6000],
        //         [1995, 6018],
        //         [1996, 3958],
        //         [1997, 5780],
        //         [1998, 5954],
        //         [1999, 6178],
        //         [2000, 6411],
        //         [2001, 5993],
        //         [2002, 5833],
        //         [2003, 5791],
        //         [2004, 5450],
        //         [2005, 5521],
        //         [2006, 5271]
        //     ]
        // },
        // "norway": {
        //     label: "Norway",
        //     data: [
        //         [1988, 4382],
        //         [1989, 4498],
        //         [1990, 4535],
        //         [1991, 4398],
        //         [1992, 4766],
        //         [1993, 4441],
        //         [1994, 4670],
        //         [1995, 4217],
        //         [1996, 4275],
        //         [1997, 4203],
        //         [1998, 4482],
        //         [1999, 4506],
        //         [2000, 4358],
        //         [2001, 4385],
        //         [2002, 5269],
        //         [2003, 5066],
        //         [2004, 5194],
        //         [2005, 4887],
        //         [2006, 4891]
        //     ]
        // }
    };
   /* var dataSet = [
    {label: "USA", color: "#005CDE" },
    {label: "Russia", color: "#005CDE" },
    { label: "UK", color: "#00A36A" },
    { label: "Germany", color: "#7D0096" },
    { label: "Denmark", color: "#992B00" },
    { label: "Sweden", color: "#DE000F" },
    { label: "Norway", color: "#ED7B00" }    
];*/
    // hard-code color indices to prevent them from shifting as
    // countries are turned on/off
    // var i = 0;
    // $.each(datasets, function(key, val) {
    //     val.color = i;
    //     ++i;
    // });

    // insert checkboxes 
    var choiceContainer = $("#choices");
    $.each(datasets, function(key, val) {
        choiceContainer.append('<input type="checkbox" name="' + key +
            '" checked="checked" id="id' + key + '">' +
            '<label for="id' + key + '">' +
            val.label + '</label>');
    });
    choiceContainer.find("input").click(plotAccordingToChoices);


    function plotAccordingToChoices() {
        var data = [];
        console.log(datasets);
        choiceContainer.find("input:checked").each(function() {
            var key = $(this).attr("name");
            if (key && datasets[key])
                data.push(datasets[key]);
            console.log(data)
       });

        if (data.length > 0)
            $.plot($("#placeholder"), data, {
                yaxis: { min: 0 },
                xaxis: { tickDecimals: 0 }
            });
    }

    plotAccordingToChoices();
    </script>

</body>

</html>