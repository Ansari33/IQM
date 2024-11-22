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
    <title>IQM - Tambah RPPH</title>
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
                        <h4 class="page-title">Tambah Data RPPH</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/rpph">RPPH</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tambah</li>
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
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="/rpph/simpan">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">RPPH Info</h4>
                                    
                                    <div class="form-group row">
                                        <label class="col-md-2  text-end control-label col-form-label">Tema</label>
                                        <div class="col-md-9">
                                            <select class="select2 form-select shadow-none"
                                                style="width: 100%; height:36px;" name="tema" required onchange="ubahSubTema()" id="tema">
                                              
                                                <optgroup label="Pilih Kelas" class="group-tema">
                                                     <option> - </option>
                                                </optgroup>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2  text-end control-label col-form-label">Sub Tema</label>
                                        <div class="col-md-9">
                                            <select class="select2 form-select shadow-none"
                                                style="width: 100%; height:36px;" name="subtema" id="sub-tema" required>
                                              
                                                <optgroup label="Pilih Sub Tema" class="group-sub-tema">
                                                     
                                                </optgroup>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2  text-end control-label col-form-label">Nama </label>
                                        <div class="col-md-9">
                                            <input  name="nama"   class="form-control" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-md-2  text-end control-label col-form-label">File </label>
                                        <div class="col-md-9">
                                            
                                        <input type="file" class="form-control" placeholder="Prepend"
                                            aria-label="Username" aria-describedby="basic-addon1" name="rpph" required>
                                            
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
    <script>
        var tema = [

        ];
        tema['Agamaku'] = [
            'Tuhanku',
            'Rukun Iman',
            'Rukun Islam',
            'Tempat-tempat Ibadah',
            'Adab-adab dalam Islam',
        ];
        tema['Cita-citaku'] = [
            'Cita-Citaku Dokter',
            'Cita-Citaku Ustadzah/Guru',
            'Cita-citaku Tentara',
            'Cita-citaku Bidan',
        ];
        
        tema['Kebutuhanku'] = [
            'Makanan & Minuman',
            'Pakaian',
            'Tempat Tinggal',
            'Kendaraan',
        ];
        tema['Lingkungan'] = [
            'Keluarga Inti',
            'Keluarga Keluarga',
            'Profesi Keluarga',
        ];
        tema['Sekolahku'] = [
            'Halaman Sekolah',
            'Kelasku',
            'Keluarga di Sekolahku',
            'Teman-teman Kelasku',
            'Lingkungan Sekolahku',
        ];
        $(".select2").select2();
        

        function ubahSubTema() {
            console.log('jalannn')
            let sTema = $("#tema").val();
            console.log(sTema)
            //console.log(tema['Agamaku'])
            let subTema = tema[sTema];
            console.log(subTema)
            $("#sub-tema").empty();
            let stringSubtema = '<optgroup label="Pilih Sub Tema" class="group-sub-tema">';
                                                     
            //                                         </optgroup>
            subTema.forEach(element => {
                console.log(element)
                stringSubtema += `
               <option value="${element}"> ${element} </option>
               `;
            });
            stringSubtema += `</optgroup>`;
            $("#sub-tema").html(stringSubtema);
            $("#sub-tema").select2();
        };
        
        $(function(){

            for (const key in tema) {
                $(".group-tema").append(`
               <option value="${key}"> ${key} </option>
               `); 
            } 
        });
    </script>

</body>

</html>