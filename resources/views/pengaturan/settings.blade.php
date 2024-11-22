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
    <title>IQM - Pengaturan</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png ') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/libs/flot/css/float-chart.css ') }}"  rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/select2/dist/css/select2.min.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/extra-libs/multicheck/multicheck.css') }}">
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
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
                        <h4 class="page-title">Edit Pengaturan</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pengaturan</li>
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
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="/pengaturan/update">
                                @csrf
                                <div class="card-body">
                                   
                                    
                                    <h4 class="card-title">Pengaturan Info</h4>
                                    <div class="form-group row">
                                        <label class="col-md-2  text-end control-label col-form-label">Tahun Ajaran Aktif</label>
                                        <div class="col-md-9">
                                            <select class="select2 form-select shadow-none"
                                                style="width: 100%; height:36px;" name="ta_aktif" required >
                                              
                                                <optgroup label="Pilih Tahun Ajaran">
                                                    @php
                                                    $initial = 2021; 
                                                    @endphp
                                                    @for ($initial; $initial <= intval(date("Y") + 3);  $initial++)
                                                    <option value="{{ $initial.'-'.($initial +1) }}" @if ($data['ta_aktif'] == $initial.'-'.($initial +1))
                                                        selected
                                                    @endif> {{ $initial.'-'.($initial +1) }}  </option> 
                                                    @endfor  
                                                </optgroup>
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-2  text-end control-label col-form-label">Semester Aktif</label>
                                        <div class="col-md-9">
                                            <select class="select2 form-select shadow-none"
                                                style="width: 100%; height:36px;" name="semester_aktif" required >
                                              
                                                <optgroup label="Pilih Tahun Ajaran">
                                                    <option value="1" @if ($data['semester_aktif'] == 1) selected @endif> 1  </option> 
                                                    <option value="2" @if ($data['semester_aktif'] == 2) selected @endif> 2  </option> 
                                                </optgroup>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-md-2  text-end control-label col-form-label">Bulan Awal Semester</label>
                                        <div class="col-md-3">  
                                            <select class="select2 form-select shadow-none"
                                                style="width: 100%; height:36px;" name="ustadzah" required >
                                              
                                                <optgroup label="Pilih Awal Semester">
                                                    @php
                                                    $initial = 2021; 
                                                    @endphp
                                                    @for ($i = 1; $i <= 12;  $i++)
                                                    <option value="{{ $i }}" > {{ $i }}  </option> 
                                                    @endfor  
                                                </optgroup>
                                                
                                            </select>
                                        </div>
                                        <label class="col-md-2  text-end control-label col-form-label">Bulan Akhir Semester</label>
                                        <div class="col-md-4">  
                                            <select class="select2 form-select shadow-none"
                                                style="width: 100%; height:36px;" name="ustadzah" required >
                                              
                                                <optgroup label="Pilih Akhir Semester">
                                                    @php
                                                    $initial = 2021; 
                                                    @endphp
                                                    @for ($i = 1; $i <= 12;  $i++)
                                                    <option value="{{ $i }}" > {{ $i }}  </option> 
                                                    @endfor  
                                                </optgroup>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-md-2  text-end control-label col-form-label"></label>
                                        <div class="col-md-9">  
                                            <input  class="form-control" id="fname"
                                                placeholder=""  disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 text-end control-label col-form-label">Sturktur Jabatan</label>
                                        <div class="col-md-6">
                                          @php
                                           $defaultAkses = [
                                            "direktur", 
                                            "kepala_sekolah",
                                            "pembina_tahfidz",
                                            "bendahara",
                                            "tata_usaha",
                                          
                                        ];   
                                          @endphp
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">Nama Jabatan</th>
                                                            <th>
                                                                Pilihan Guru
                                                            </th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody class="customtable">
                                                        @foreach($defaultAkses as $defA => $aks)
                                                        <tr>
                                                            <td>{{ ucwords(str_replace('_',' ',$aks))}}</td>
                                                            <th>
                                                                <select class="select2 form-select shadow-none"
                                                                    style="width: 100%; height:36px;" name="{{$aks}}" required >
                                                                
                                                                    <optgroup label="Pilih Guru">
                                                                        
                                                                        @foreach ($ustadzah as $ustdz => $ust)
                                                                        <option value="{{ $ust['id'] }}" @if ($data[$aks] == $ust['id']) selected @endif > {{ $ust['nama'] }}  </option> 
                                                                        @endforeach  
                                                                    </optgroup>
                                                                    
                                                                </select>
                                                            </th>
                                                            
                                                        </tr>
                                                        @endforeach
                                                        
                                                   
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2  text-end control-label col-form-label"></label>
                                        <div class="col-md-9">  
                                            <input  class="form-control" id="fname"
                                                placeholder=""  disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 text-end control-label col-form-label">Data Sekolah</label>
                                        <div class="col-md-6">
                                          @php
                                           $defaultAkses = [
                                            "alamat", 
                                            "telepon",
                                            "email",
                                            
                                          
                                        ];   
                                          @endphp
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr><th>Data</th>
                                                            <th>
                                                                Nilai
                                                            </th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody class="customtable">
                                                        @foreach($defaultAkses as $defA => $aks)
                                                        <tr>
                                                            <td>{{ ucwords(str_replace('_',' ',$aks))}}</td>
                                                            <th>
                                                                <textarea name="{{ $aks }}" class="form-control" id="" cols="30" rows="2">{{ $data[$aks]}}</textarea>
                                                            </th>
                                                            
                                                        </tr>
                                                        @endforeach
                                                        
                                                   
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2  text-end control-label col-form-label"></label>
                                        <div class="col-md-9">  
                                            <input  class="form-control" id="fname"
                                                placeholder=""  value="" disabled>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
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
   <script src="{{ asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
   <script src="{{ asset('assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
   <script src="{{ asset('assets/libs/select2/dist/js/select2.min.js') }}"></script>
   <script src="{{ asset('assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/DataTables/datatables.min.js') }}"></script>
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