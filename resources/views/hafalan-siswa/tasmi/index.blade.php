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
    <title>IQM - Rapor Tasmi'</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png ') }}">
    <!-- Custom CSS -->
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
                        <h4 class="page-title">Rapor Tasmi'</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                
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
                <!-- Sales chart -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Sales chart -->
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
                                
                                <p class="mb-0">Data Rapor Tasmi Berhasil {{ session('berhasil') }}.</p>
                            </div>
                            @elseif (session('gagal'))
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading">Berhasil!</h4>
                                
                                <p class="mb-0">Data Rapor Tasmi {{ session('gagal') }}.</p>
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
                                        <h5 class="card-title">Data Nilai Tasmi</h5>
                                    </div>
                                    <div class="col-lg-1">
                                        <a href="/tasmi/tambah/" class="btn btn-success btn-sm text-white"><i class="fa fa-plus"> </i></a>
                                    </div>
                                </div>
                                <div class="row ml-3">
                                    <div class="col-md-1">
                                        <h6 class="mt-2 ">Per Siswa : </h6>
                                        
                                    </div>
                                    
                                    <div class="col-md-2 form-group">
                                        
                                        <select class="select2 form-select shadow-none form-control"
                                                style="width: 100%; height:36px;" name="siswa" id="siswa">
                                              
                                            <optgroup label="Pilih Siswa">
                                                @foreach($siswa as $sis => $s)
                                                <option value="{{ $s['id'] }}"> {{ $s['nama'] }} </option> 
                                                @endforeach
                                            </optgroup>
                                            
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-3 ">
                                   
                                        <button class="btn btn-outline-success"  onclick="exportExcel()"><i class="mdi mdi-search"></i> Excel</button>
                                        <button class="btn btn-outline-danger" onclick="exportPdf()"><i class="mdi mdi-search"></i> PDF</button>
                                    </div>
                                        
                                        
                                    </div>
                                </div>
                                
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 10%">Tanggal</th> 
                                                <th style="">Siswa</th> 
                                                <th style="">NIS</th> 
                                                <th>Kelas</th> 
                                                <th>Surah</th>
                                                <th align="center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                            <tr>
                                                <td> {{ $item['tanggal'] }} </td> 
                                                <td> {{ $item['siswa'] == null ? '-' : $item['siswa']['nama'] }} </td>
                                                <td> {{ $item['siswa'] == null ? '-' : $item['siswa']['nis'] }} </td>
                                                <td> {{ $item['siswa']['kelas_siswa'] == null ? '-' : $item['siswa']['kelas_siswa']['kelas']['nama'] }} </td>
                                                <td> {{ $item['surah']}} </td>
                                                <td >
                                                    <a href="/tasmi/edit/{{ $item['id']}}" type="button" class="btn btn-cyan btn-sm text-white">Edit</a>
                                                    <a href="/tasmi/delete/{{ $item['id'] }}" type="button" class="btn btn-danger btn-sm text-white" onclick="return confirm('Yakin Menghapus Data?')">Hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="width: 10%">Tanggal</th> 
                                                <th style="">Siswa</th> 
                                                <th style="">NIS</th> 
                                                <th>Kelas</th> 
                                                <th>Surah</th>
                                                <th align="center">Aksi</th>
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

        function exportPdf(){
            let siswa = $('#siswa').val()
            window.open(`/tasmi/pdf/${siswa}`)
        }
    </script>

</body>

</html>