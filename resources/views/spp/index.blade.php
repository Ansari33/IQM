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
    <title>IQM - Pembayaran SPP</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png ') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/libs/flot/css/float-chart.css ') }}"  rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/select2/dist/css/select2.min.css ') }}">
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
                            class="ti-menu ti-close"></i></a>
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
                        <h4 class="page-title">Pembayaran SPP</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pembayaran SPP</li>
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
                {{-- <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                <h6 class="text-white">Dashboard</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                                <h6 class="text-white">Charts</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                                <h6 class="text-white">Widgets</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                <h6 class="text-white">Tables</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-arrow-all"></i></h1>
                                <h6 class="text-white">Full Width</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
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
                    <!-- Column -->
                </div> --}}
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-3 mb-2">
                        <div class="bg-dark p-10 text-white text-center">
                            <i class="fa fas-money-bill-alt mb-1 font-16"></i>
                            <h5 class="mb-0 mt-1">Rp. {{ number_format($rangkuman['bulan']) }}</h5>
                            <small class="font-light">Total Bulan Ini</small>
                        </div>
                    </div>
                    <div class="col-3 mb-2">
                        <div class="bg-dark p-10 text-white text-center">
                            <i class="fa fas-money-bill-alt mb-1 font-16"></i>
                            <h5 class="mb-0 mt-1">Rp. {{ number_format($rangkuman['ta']) }}</h5>
                            <small class="font-light">Total Tahun Ajaran Ini</small>
                        </div>
                    </div>
                    <div class="col-3 mb-2">
                        <div class="bg-dark p-10 text-white text-center">
                            <i class="fa fas-money-bill-alt mb-1 font-16"></i>
                            <h5 class="mb-0 mt-1">Rp. {{ number_format($rangkuman['semua']) }}</h5>
                            <small class="font-light">Total Keseluruhan</small>
                        </div>
                    </div>
                    <div class="col-3 mb-2">
                        <div class="bg-dark p-10 text-white text-center">
                            <i class="fa fas-money-bill-alt mb-1 font-16"></i>
                            <h5 class="mb-0 mt-1">Rp. 0</h5>
                            <small class="font-light">Saldo Akhir</small>
                        </div>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            @if (session('berhasil'))
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Berhasil!</h4>
                                
                                <p class="mb-0">Data Pembayaran SPP Berhasil {{ session('berhasil') }}.</p>
                            </div>
                            @elseif (session('gagal'))
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading">Gagal!</h4>
                                
                                <p class="mb-0">Data Pembayaran SPP Gagal {{ session('gagal') }}.</p>
                            </div>
                            @elseif (session('error'))
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading">Error!</h4>
                                
                                <p class="mb-0">{{ session('error') }}.</p>
                            </div>
                            @endif
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-lg-11">
                                        <h5 class="card-title">Data Pembayaran</h5>
                                    </div>
                                    <div class="col-lg-1">
                                        <a href="/spp/tambah" class="btn btn-success btn-sm text-white"><i class="fa fa-plus"> </i></a>
                                        <a href="/spp/exportall" class="btn btn-success btn-sm text-white"><i class="fa fa-file"> </i></a>
                                    </div>
                                </div>

                                <div class="row ml-3">
                                    <div class="col-md-1">
                                        <h6 class="mt-2 ">Filter Data : </h6>
                                        
                                    </div>
                                    <div class="col-md-2">
                                        <select class="select2 form-select shadow-none"
                                                style="width: 100%; height:36px;" name="filter" id="filter" onchange="setAktifFilter()" >
                                              
                                            <optgroup label="Pilih Tipe Filter">
                                                
                                                <option value="siswa"> Siswa </option> 
                                                <option value="bulan"> Bulan </option> 
                                             
                                            </optgroup>
                                            
                                        </select>
                                        
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group" id="filter-siswa">
                                            <select class="select2 form-select shadow-none"
                                                style="width: 100%; height:36px;" name="siswa" id="siswa" required >
                                          
                                                <optgroup label="Pilih Siswa">
                                                    @foreach ($siswa as $item)
                                                    <option value="{{ $item['id']}}"> {{ $item['nama'] == null ? ' ' : $item['nama'] }} </option> 
                                                    @endforeach  
                                                </optgroup>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group" id="filter-bulan" style="display: none">
                                            <select class="select2 form-select shadow-none"
                                                style="width: 100%; height:36px;" name="bulan" id="bulan" required >
                                              
                                            <optgroup label="Pilih Bulan">
                                                
                                                <option value="1"> 1 - Januari </option> 
                                                <option value="2"> 2 - Februari </option> 
                                                <option value="3"> 3 - Maret </option> 
                                                <option value="4"> 4 - April </option>
                                                <option value="5"> 5 - Mei </option> 
                                                <option value="6"> 6 - Juni </option> 
                                                <option value="7"> 7 - Juli </option> 
                                                <option value="8"> 8 - Agustus </option>
                                                <option value="9"> 9 - September </option> 
                                                <option value="10"> 10 - Oktober </option> 
                                                <option value="11"> 11 - November </option> 
                                                <option value="12"> 12 - Desember </option> 
                                                    
                                            </optgroup>
                                            
                                        </select>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="col-md-3 ">
                                        <button class="btn btn-outline-info"><i class="mdi mdi-search"></i> Cari</button>
                                        <button class="btn btn-outline-success"  onclick="exportExcel()"><i class="mdi mdi-search"></i> Excel</button>
                                        <button class="btn btn-outline-danger"><i class="mdi mdi-search"></i> PDF</button>
                                    </div>
                                        
                                   
                                </div>
                                
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Tanggal </th>
                                                <th>Siswa</th>
                                                <th>Bulan</th>
                                                <th>Tahun Ajaran</th>
                                                <th>Nominal</th>
                                                <th>Bukti</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                            <tr>
                                                <td> {{ $item['tanggal'] }} </td>
                                                <td> {{ $item['siswa'] == null ? 'Stok Tidak Ditemukan' : $item['siswa']['nama']}} </td>
                                                <td> {{ $item['bulan'] }} </td>
                                                <td> {{ $item['tahun_ajaran'] }} </td>
                                                <td> {{ number_format($item['nominal'])  }} </td>
                                                <td> <a href="/bukti-spp/{{ $item['bukti'] }}"> <i class="fa fa-download"> </i> </a> </td>
                                                <td>
                                                    <a href="/spp/edit/{{ $item['id']}}" type="button" class="btn btn-cyan btn-sm text-white">Edit</a>
                                                    
                                                    <a href="/spp/hapus/{{ $item['id'] }}" type="button" class="btn btn-danger btn-sm text-white" onclick="return confirm('Yakin Menghapus Data?')">Hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Tanggal </th>
                                                <th>Siswa</th>
                                                <th>Bulan</th>
                                                <th>Tahun Ajaran</th>
                                                <th>Nominal</th>
                                                <th>Bukti</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
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
   <script src="{{ asset('assets/extra-libs/DataTables/datatables.min.js') }}"></script>
   <script src="{{ asset('assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
   <script src="{{ asset('assets/libs/select2/dist/js/select2.min.js') }}"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
        $(".select2").select2();
       // $("#bulan").hide();
        function setAktifFilter(){
            let filter = $("#filter").val();
            if(filter == 'siswa'){
                $("#filter-siswa").show();
                $("#filter-bulan").hide();
            }else{
                $("#filter-siswa").hide();
                $("#filter-bulan").show();
            }
        }

        function exportExcel(params) {
            let filter = $("#filter").val();
            let val = '';
            if(filter == 'siswa'){
                val = $("#siswa").val();
            }else{
                val = $("#bulan").val();
            }
            window.open(`/spp/export/${filter}/${val}`)
        }
        function exportExcelAll() {
            
            window.open(`/spp/exportall`)
        }

    </script>

</body>

</html>