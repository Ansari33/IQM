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
    <title>IQM - Tambah Rapor IWR</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png ') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/libs/flot/css/float-chart.css ') }}"  rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/select2/dist/css/select2.min.css ') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css ') }}">
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
                        <h4 class="page-title">Tambah Nilai IWR</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                  
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
                
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="/rapor/iwr/simpan">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Info Nilai IWR</h4>
                                    
                                    {{-- <div class="form-group row">
                                        <label class="col-md-2  text-end control-label col-form-label">Siswa</label>
                                        <div class="col-md-9">
                                            <select class="select2 form-select shadow-none"
                                                style="width: 100%; height:36px;" name="kelamin">
                                              
                                                <optgroup label="Pilih Merk">
                                                    <option value="laki-laki"> Laki-Laki </option> 
                                                    <option value="perempuan"> Perempuan </option> 
                                                   
                                                </optgroup>
                                                
                                            </select>
                                        </div>
                                    </div> --}}
                                    <div class="form-group row">
                                        <label for="fname"
                                            class="col-sm-2 text-end control-label col-form-label">Tanggal</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="text" name="tanggal" class="form-control mydatepicker" placeholder="mm/dd/yyyy" autocomplete="false" >
                                                <div class="input-group-append">
                                                    <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2  text-end control-label col-form-label">Siswa</label>
                                        <div class="col-md-9">
                                            <select class="select2 form-select shadow-none"
                                                style="width: 100%; height:36px;" name="siswa">
                                              
                                                <optgroup label="Pilih Siswa">
                                                    @foreach($siswa as $sis => $s)
                                                    <option value="{{ $s['id'] }}"> {{ $s['nama'] }} </option> 
                                                    @endforeach
                                                </optgroup>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2  text-end control-label col-form-label">Jilid</label>
                                        <div class="col-md-9">
                                            <input type="text" name="jilid" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2 text-end control-label col-form-label">Nilai</label>
                                        <div class="col-md-9">
                                          
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            
                                                            <th scope="col" colspan="">Nama Indikator</th>
                                                            <th scope="col" colspan="">keterangan</th>
                                                            <th scope="col" colspan="">Nilai</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="customtable">
                                                        @foreach($indikator as $defA => $aks)
                                                        
                                                        <tr>
                                                            
                                                            <td>{{ ucwords($aks['nama'])}}</td>
                                                            <th>
                                                                <input type="hidden" value="{{ $aks['nama'] }}" name="indikator[]">
                                                                <input type="hidden" name="ket[{{$aks['nama']}}]" id="keterangan-{{$aks['id']}}">
                                                                @php
                                                                $sInd = json_decode($aks['child'],true);
                                                                @endphp
                                                                <select class="select2 form-select shadow-none"
                                                                    style="width: 100%; height:36px;" name="keterangan[]" onchange="setRangeNilai('{{ $aks['id']}}')" id="indikator-{{ $aks['id'] }}">
                                                                
                                                                    <optgroup label="Pilih Siswa">
                                                                        @foreach($sInd as $si => $ind)
                                                                        <option value="{{ $ind['awal'].'-'.$ind['akhir'] }}"> {{ $ind['keterangan'] }} </option> 
                                                                        @endforeach
                                                                    </optgroup>
                                                                    
                                                                </select>
                                                            </th>
                                                            <th>
                                                                
                                                                    <select class="select2 form-select shadow-none"
                                                                    style="width: 100%; height:36px;" name="nilai[]" id="nilai-{{ $aks['id'] }}">
                                                                
                                                                    <optgroup label="Pilih Nilai">
                                                                        <option value=""> 0 </option> 
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
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
   <script src="{{ asset('assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/libs/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script>
         $(".select2").select2();
         jQuery('.mydatepicker').datepicker();
         jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });

        function setRangeNilai(id) {
            console.log('id',id)
            let rangeNilai = $(`#indikator-${id}`).val();
            let ket = $(`#indikator-${id} :selected`).text();
            $(`#keterangan-${id}`).val(ket);
            console.log(ket);
            let nilai = rangeNilai.split('-');
            console.log(rangeNilai)
            console.log(nilai)
            $(`#nilai-${id}`).empty();
            let stringRange = '<optgroup label="Pilih Nilai" class="group-sub-tema">';
                                                     
            for(let i = nilai[0]; i<= nilai[1];i++){
           
                stringRange += `<option value="${i}"> ${i} </option>`;
            }
            stringRange += `</optgroup>`;
            $(`#nilai-${id}`).html(stringRange);
            $(`#nilai-${id}`).select2();
        };
    </script>

</body>

</html>