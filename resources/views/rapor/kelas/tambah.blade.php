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
                        <h4 class="page-title">Tambah Rapor Siswa</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Siswa</a></li>
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
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="/rapor/kelas/simpan">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Info Rapor Siswa</h4>
                                    
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
                                        <label class="col-md-2  text-end control-label col-form-label">Semester</label>
                                        <div class="col-md-9">
                                            <select class="select2 form-select shadow-none"
                                                style="width: 100%; height:36px;" name="semester">
                                              
                                                <optgroup label="Pilih Siswa">
                                                   
                                                    <option value="1"> Semester 1 </option> 
                                                    <option value="2"> Semester 2 </option> 
                                                   
                                                </optgroup>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-2  text-end control-label col-form-label">Tahun Ajaran</label>
                                        <div class="col-md-9">
                                            <select class="select2 form-select shadow-none"
                                                style="width: 100%; height:36px;" name="tahun_ajaran" required>
                                              
                                                <optgroup label="Pilih Tahun Ajaran">
                                                    @php
                                                    $initial = 2019; 
                                                    @endphp
                                                    @for ($initial; $initial <= intval(date("Y") + 5);  $initial++)
                                                    <option value="{{ $initial.'-'.($initial +1) }}"> {{ $initial.'-'.($initial +1) }}  </option> 
                                                    @endfor  
                                                </optgroup>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    @php
                                    $penilaian = [
                                        'Program Keislaman' => [
                                            'bidang pengembangan' => [
                                                'Hafalan Al Qur’an & Surah Pendek' => ["An-Naba'","An-Naazi'at", "Abasa", 'At-Takwir', 'Al-Infitar', 'Al-Mutaffiffin', 'Al-Insyiqaq', 'Al-Buruuj', 'At-Tariq', 'Al- A’la', 'Al-Gasyiyah', 'Al-Fajr', 'Al-Balad', 'As-Syams', 'Al- Lail', 'Ad- Duha', 'Al-Insyirah', 'At-Tin', 'Al-Alaq', 'Al- Qadr', 'Al-Bayyinah', 'Al-Zalzalah', 'Al-Aadiyat', 'Al-Qoriah', 'At-Takatsur', 'Al-Asr', 'Al-Humazah', 'Al-Fiil', 'Al-Quraisy', 'Al-Maa’un', 'Al-Kautsar', 'Al-Kaafirun', 'An-Nasr', 'Al-Lahab', 'Al-Ikhlas', 'Al-Falaq', 'An-Naas'],
                                                "Hafalan Do'a" => ['Sebelum Belajar', 'Kebaikan Dunia dan Akhirat', 'Bepergian', 'Naik Kendaraan', 'Sebelum Makan', 'Sesudah Makan', 'Untuk Orang Tua', 'Sebelum Tidur', 'Bangun Tidur', 'Masuk Wc', 'Berpakaian', 'Masuk Kamar Mandi', 'Keluar Kamar Mandi', 'Khotmil Qur’an', 'Masuk Mesjid', 'Keluar Mesjid', 'Sesudah Adzan', 'Turun Hujan', 'Penutup Majelis'],
                                                'Hafalan Hadits' => ['Jangan Makan dan Minum Sambil Berdiri', 'Jangan Suka Marah', 'Sesama Muslim Bersaudara', 'Wajib Menuntut Ilmu', 'Berbuat Baik', 'Menutup Aurat', 'Menyebarkan salam', 'Keutamaan Belajar Al-quran', 'Kasih Sayang', 'Menjaga Kebersihan'],
                                            ],
                                        ],
                                    ];

                                    $penilaian2 = [
                                        'A. MEMILIKI AQIDAH YANG LURUS' => ['Mengenal Rukun Islam dan Rukun Iman', 'Melafalkan Asma’ul Husna', 'Mengenal dan Berlatih Ikhlas dalam Beramal', 'Mengenal Allah sebagai Pencipta, Pemberi rezeki dan Pemilik', 'Mengenal Allah Melalui ciptaan-Nya', 'Mengenal dan Berlatih Mengucapkan kalimat thoyyibah', 'Bangga Sebagai Anak Muslim', 'Mengenal Hal-Hal yang Ghaib', 'Mengenal Rasa Syukur Kepada Allah'],
                                        'B. MEMILIKI IBADAH YANG BENAR' => ['Mengenal dan berlatih tata cara wudhu dengan benar', 'Mengenal dan berlatih adzan dan iqomah', 'Mengenal dan berlatih gerakan dan bacaan sholat', 'Mengenal dan berlatih tata cara sholat berjamaah', 'Mengenal dan berlatih macam-macam sholat wajib', 'Mengenal dan berlatih berdzikir kepada Allah', 'Berlatih puasa di bulan Ramadhan', 'Mengenal dan berlatih kebiasaan berinfaq', 'Terbiasa mengucapkan salam', 'Mengenal dan berlatih menutup aurat', 'Terbiasa berdo’a dalam setiap aktivitas', 'Berlatih manasik haji', 'Mengenal zakat fitrah', 'Mengenal dan berlatih niat ibadah karena Allah', 'Mengenal dan berlatih berdo’a ba’da sholat', 'Mengenal perbuatan yang disukai dan tidak disukai'],
                                        'C. MEMILIKI KEPRIBADIAN YANG MATANG DAN BERAKHLAK MULIA' => ['Mengenal diri dengan benar', 'Mengenal perbedaan jenis kelamin', 'Mengenal mengungkapkan emosi (mengenal emosi, menamakan emosi, mengungkapkan emosi)', 'Mampu menunjukan sikap inisiatif dan mandiri', 'Belajar dan berlatih sikap tawadhu dan menghormati orang lain', 'Berlatih bersikap pemberani dalam menyampaikan nilai-nilai kebenaran', 'Berlatih memperhatikan orang lain berbicara', 'Berlatih membangun hubungan dengan orang lain.', 'Berbakti kepada kedua orang tua.', 'Belajar dan berlatih senang menerima tamu', 'Belajar dan berlatih senyum, salam dan sapa (3S)', 'Berlatih menghargai perbedaan dan berempati kepada orang lain.', 'Berlatih menumbuhkan sikap hidup dan membiasakan berperilaku ramah lingkungan (go green)'],
                                        'D. MENJADI PRIBADI YANG BERSUNGGUH-SUNGGUH, DISIPLIN DAN MAMPU MENGENDALIKAN EMOSI' => ['Membiasakan diri hadir disekolah tepat waktu', 'Mengenal dan berlatih mengikuti berbagai aturan', 'Belajar dan berlatih persiapan menulis', 'Belajar dan berlatih persiapan membaca', 'Belajar dan berlatih membiasakan diri berpakaian rapi dan menjaga barang miliknya ', 'Mengenal fungsi dan manfaat benda', 'Berlatih mengenal perbedaan jenis kelamin', 'Berlatih dan belajar mengendalikan emosi ', 'Berlatih dan belajar mengenal lingkungan sekitar', 'Mengenal perbuatan baik dan mengajak orang lain berbuat baik'],
                                        'E. MEMILIKI KEMAMPUAN MEMBACA, MENGHAFAL, DAN MEMAHAMI AL-QUR’AN DENGAN BAIK' => ['Mengenal huruf hijaiyah dan tanda bacanya', 'Melafalkan minimal 5 surat pendek dalam Al-Qur’an yang ada di juz 30'],
                                        'F. MEMILIKI WAWASAN YANG LUAS' => [
                                            'child' => [
                                                'Dalam Bidang Keislaman' => ['Mengenal dan melafalkan minimal 5 hadist pendek (penggalan hadist)', 'Mengenal Rasulullah (ash Shiroh Nabawiyah) di masa anak-anak', 'Mengenal kisah sahabat yang dijamin masuk surga', 'Mengenal Khulafaur Rosyidin'],
                                                'Dalam Bidang Umum' => ['Memiliki perilaku yang mencerminkan sikap ingin tahu', 'Memiliki perilaku yang mencerminkan sikap kreatif', 'Mengenal benda-benda disekitarnya', 'Mengenal lingkungan social', 'Mengenal lingkungan alam (hewan, tanaman, cuaca, tanah, air, batu-batuan, dll', 'Mengenal teknologi sederhana', 'Mengenal berbagai karya dan aktivitas seni'],
                                                'Kesehatan dan Kebugaran' => ['Mengenal dan berlatih memilih makanan dan minuman yang halal dan sehat', 'Mengenal dan berlatih cara makan dan minum sesuai sunnah', 'Mengenal manfaat hidup sehat.', 'Mengenal anggota tubuh, fungsi dan gerakannya untuk pengembangan motoriknya', 'Mengenal waktu-waktu makan', 'Makan tanpa bantuan orang lain', 'Merapikan peralatan makan tanpa bantuan orang lain.', 'Mengenal P3K', 'Mengenal fungsi dan merawat tubuh', 'Olahraga sambil bermain', 'Berlatih dan mengenal gerakan-gerakan tubuh'],
                                                'Life Skill dan Jiwa Wira Usaha' => ['Mampu menolong diri sendiri', 'Berlatih membuat dan mempresentasikan karyanya', 'Memiliki perilaku yang mencerminkan sikap percaya diri', 'Memahami bahasa reseptif (menyimak)', 'Memahami bahasa Ekspresif (Mengungkapkan bahasa verbal dan non verbal)', 'Mengenal keaksaraan awal melalui bermain', 'Belajar menyelesaikan tugas tanpa bantuan orang lain', 'Belajar mengungkapkan ide dan gagasan'],
                                            ],
                                        ],
                                    ];

                                    $perkembangan = ['NILAI MORAL AGAMA', 'BAHASA', 'KOGNITIF', 'SOSIAL EMOSIONAL', 'FISIK MOTORIK', 'SENI'];
                                    $ekstra = ['Berenang'];
                                    @endphp
                                    <div class="form-group row">  
                                        <label class="col-md-2 text-end control-label col-form-label">Hafalan </label>
                                        <div class="col-md-10 ">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="tabel_hafalan">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col" colspan="">#</th>
                                                                    <th scope="col" colspan="">Surah</th>
                                                                    <th scope="col" colspan="">Nilai</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="customtable">
                                                                @foreach($penilaian['Program Keislaman']['bidang pengembangan']['Hafalan Al Qur’an & Surah Pendek'] as $defA => $aks)
                                                                <tr>
                                                                    <td>{{ $loop->iteration}}</td>
                                                                    <td>{{ ucwords($aks)}}</td>
                                                                    <th>
                                                                        <select class="select2 form-select shadow-none"
                                                                        style="width: 100%; height:36px;" name="nilai[{{$aks}}]" required>
                                                                      
                                                                        <optgroup label="Pilih Nilai">
                                                                           
                                                                            <option value="BM"> BM  </option> 
                                                                            <option value="BB"> BB  </option> 
                                                                            <option value="BSH"> BSH  </option> 
                                                                            <option value="BSB"> BSB  </option> 
                                                                        </optgroup>
                                                                        
                                                                    </select>
                                                                    </th>
                                                                </tr>
                                                                @endforeach
                                                                
                                                           
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="tabel_doa">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col" colspan="">#</th>
                                                                    <th scope="col" colspan="">Do'a</th>
                                                                    <th scope="col" colspan="">Nilai</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="customtable">
                                                                @foreach($penilaian['Program Keislaman']['bidang pengembangan']["Hafalan Do'a"] as $defA => $aks)
                                                                <tr>
                                                                    <td>{{ $loop->iteration}}</td>
                                                                    <td>{{ ucwords($aks)}}</td>
                                                                    <th>
                                                                        <select class="select2 form-select shadow-none"
                                                                        style="width: 100%; height:36px;" name="nilai[{{ $aks }}]" required>
                                                                    
                                                                        <optgroup label="Pilih Nilai">
                                                                        
                                                                            <option value="BM "> BM  </option> 
                                                                            <option value="BB"> BB  </option> 
                                                                            <option value="BSH"> BSH  </option> 
                                                                            <option value="BSB"> BSB  </option> 
                                                                        </optgroup>
                                                                        
                                                                    </select>
                                                                    </th>
                                                                </tr>
                                                                @endforeach
                                                                
                                                        
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="tabel_hadits">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col" colspan="">#</th>
                                                                    <th scope="col" colspan="">Hadits</th>
                                                                    <th scope="col" colspan="">Nilai</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="customtable">
                                                                @foreach($penilaian['Program Keislaman']['bidang pengembangan']["Hafalan Hadits"] as $defA => $aks)
                                                                <tr>
                                                                    <td>{{ $loop->iteration}}</td>
                                                                    <td>{{ ucwords($aks)}}</td>
                                                                    <th>
                                                                        <select class="select2 form-select shadow-none"
                                                                        style="width: 100%; height:36px;" name="nilai[{{ $aks }}]" required>
                                                                    
                                                                        <optgroup label="Pilih Nilai">
                                                                        
                                                                            <option value="BM "> BM  </option> 
                                                                            <option value="BB"> BB  </option> 
                                                                            <option value="BSH"> BSH  </option> 
                                                                            <option value="BSB"> BSB  </option> 
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
                                    </div>
                                    <div class="form-group row">
                                        
                                        <label class="col-md-2 text-end control-label col-form-label">Bahasa </label>
                                        <div class="col-md-10 ">
                                            <div class="row">
                                               
                                                <div class="col-md-6">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="tabel_hafalan">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col" colspan="">#</th>
                                                                    <th scope="col" colspan="">Aspek Bahasa Arab</th>
                                                                    <th scope="col" colspan="">Nilai</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="customtable">
                                                                
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Mengenal Bahasa Arab Angka</td>
                                                                    <th>
                                                                        <select class="select2 form-select shadow-none"
                                                                        style="width: 100%; height:36px;" name="nilai[Mengenal Bahasa Arab Angka]" required>
                                                                      
                                                                        <optgroup label="Pilih Nilai">
                                                                           
                                                                            <option value="BM "> BM  </option> 
                                                                            <option value="BB"> BB  </option> 
                                                                            <option value="BSH"> BSH  </option> 
                                                                            <option value="BSB"> BSB  </option> 
                                                                        </optgroup>
                                                                        
                                                                    </select>
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Mengenal Kata Benda ada di Sekolah</td>
                                                                    <th>
                                                                        <select class="select2 form-select shadow-none"
                                                                        style="width: 100%; height:36px;" name="nilai[Mengenal Kata Benda ada di Sekolah]" required>
                                                                      
                                                                        <optgroup label="Pilih Nilai">
                                                                           
                                                                            <option value="BM "> BM  </option> 
                                                                            <option value="BB"> BB  </option> 
                                                                            <option value="BSH"> BSH  </option> 
                                                                            <option value="BSB"> BSB  </option> 
                                                                        </optgroup>
                                                                        
                                                                    </select>
                                                                    </th>
                                                                </tr>
                                                              
                                                                
                                                           
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-md-6">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="tabel_hafalan">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col" colspan="">#</th>
                                                                    <th scope="col" colspan="">Aspek Bahasa Inggris</th>
                                                                    <th scope="col" colspan="">Nilai</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="customtable">
                                                                
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Mengenal Anggota Badan</td>
                                                                    <th>
                                                                        <select class="select2 form-select shadow-none"
                                                                        style="width: 100%; height:36px;" name="nilai[Mengenal Anggota Badan]" required>
                                                                      
                                                                        <optgroup label="Pilih Nilai">
                                                                           
                                                                            <option value="BM "> BM  </option> 
                                                                            <option value="BB"> BB  </option> 
                                                                            <option value="BSH"> BSH  </option> 
                                                                            <option value="BSB"> BSB  </option> 
                                                                        </optgroup>
                                                                        
                                                                    </select>
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Mengenal Anggota Keluarga</td>
                                                                    <th>
                                                                        <select class="select2 form-select shadow-none"
                                                                        style="width: 100%; height:36px;" name="nilai[Mengenal Anggota Keluarga]" required>
                                                                      
                                                                        <optgroup label="Pilih Nilai">
                                                                           
                                                                            <option value="BM "> BM  </option> 
                                                                            <option value="BB"> BB  </option> 
                                                                            <option value="BSH"> BSH  </option> 
                                                                            <option value="BSB"> BSB  </option> 
                                                                        </optgroup>
                                                                        
                                                                    </select>
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Mengenal Angka</td>
                                                                    <th>
                                                                        <select class="select2 form-select shadow-none"
                                                                        style="width: 100%; height:36px;" name="nilai[Mengenal Angka]" required>
                                                                      
                                                                        <optgroup label="Pilih Nilai">
                                                                           
                                                                            <option value="BM "> BM  </option> 
                                                                            <option value="BB"> BB  </option> 
                                                                            <option value="BSH"> BSH  </option> 
                                                                            <option value="BSB"> BSB  </option> 
                                                                        </optgroup>
                                                                        
                                                                    </select>
                                                                    </th>
                                                                </tr>
                                                                
                                                           
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        
                                        <label class="col-md-2 text-end control-label col-form-label">Membaca/Mengaji </label>
                                        <div class="col-md-10 ">
                                            <div class="row">
                                               
                                                <div class="col-md-6">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="tabel_hafalan">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col" colspan="">#</th>
                                                                    <th scope="col" colspan="">Aspek Penilaian</th>
                                                                    <th scope="col" colspan="">Nilai</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="customtable">
                                                                
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Ilman Wa Ruuhan</td>
                                                                    <th>
                                                                        <select class="select2 form-select shadow-none"
                                                                        style="width: 100%; height:36px;" name="nilai[Ilman Wa Ruuhan]" required>
                                                                      
                                                                        <optgroup label="Pilih Nilai">
                                                                           
                                                                            <option value="BM "> BM  </option> 
                                                                            <option value="BB"> BB  </option> 
                                                                            <option value="BSH"> BSH  </option> 
                                                                            <option value="BSB"> BSB  </option> 
                                                                        </optgroup>
                                                                        
                                                                    </select>
                                                                    </th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                   
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group row">  
                                        <label class="col-md-2 text-end control-label col-form-label">AQIDAH YANG LURUS </label>
                                        <div class="col-md-10 ">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="tabel_hafalan">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col" colspan="">#</th>
                                                                    <th scope="col" colspan="">Kompetensi</th>
                                                                    <th scope="col" colspan="">Nilai</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="customtable">
                                                                @foreach($penilaian2['A. MEMILIKI AQIDAH YANG LURUS'] as $defA => $aks)
                                                                <tr>
                                                                    <td>{{ $loop->iteration}}</td>
                                                                    <td>{{ ucwords($aks)}}</td>
                                                                    <th>
                                                                        <select class="select2 form-select shadow-none"
                                                                        style="width: 100%; height:36px;" name="nilai[{{$aks}}]" required>
                                                                      
                                                                        <optgroup label="Pilih Nilai">
                                                                           
                                                                            <option value="BM "> BM  </option> 
                                                                            <option value="BB"> BB  </option> 
                                                                            <option value="BSH"> BSH  </option> 
                                                                            <option value="BSB"> BSB  </option> 
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
                                    </div>
                                    <div class="form-group row">  
                                        <label class="col-md-2 text-end control-label col-form-label">IBADAH YANG BENAR </label>
                                        <div class="col-md-10 ">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="tabel_hafalan">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col" colspan="">#</th>
                                                                    <th scope="col" colspan="">Kompetensi</th>
                                                                    <th scope="col" colspan="">Nilai</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="customtable">
                                                                @foreach($penilaian2['B. MEMILIKI IBADAH YANG BENAR'] as $defA => $aks)
                                                                <tr>
                                                                    <td>{{ $loop->iteration}}</td>
                                                                    <td>{{ ucwords($aks)}}</td>
                                                                    <th>
                                                                        <select class="select2 form-select shadow-none"
                                                                        style="width: 100%; height:36px;" name="nilai[{{$aks}}]" required>
                                                                      
                                                                        <optgroup label="Pilih Nilai">
                                                                           
                                                                            <option value="BM "> BM  </option> 
                                                                            <option value="BB"> BB  </option> 
                                                                            <option value="BSH"> BSH  </option> 
                                                                            <option value="BSB"> BSB  </option> 
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
                                    </div>
                                    <div class="form-group row">  
                                        <label class="col-md-2 text-end control-label col-form-label">KEPRIBADIAN YANG MATANG DAN BERAKHLAK MULIA </label>
                                        <div class="col-md-10 ">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="tabel_hafalan">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col" colspan="">#</th>
                                                                    <th scope="col" colspan="">Kompetensi</th>
                                                                    <th scope="col" colspan="">Nilai</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="customtable">
                                                                @foreach($penilaian2['C. MEMILIKI KEPRIBADIAN YANG MATANG DAN BERAKHLAK MULIA'] as $defA => $aks)
                                                                <tr>
                                                                    <td>{{ $loop->iteration}}</td>
                                                                    <td>{{ ucwords($aks)}}</td>
                                                                    <th>
                                                                        <select class="select2 form-select shadow-none"
                                                                        style="width: 100%; height:36px;" name="nilai[{{$aks}}]" required>
                                                                      
                                                                        <optgroup label="Pilih Nilai">
                                                                           
                                                                            <option value="BM "> BM  </option> 
                                                                            <option value="BB"> BB  </option> 
                                                                            <option value="BSH"> BSH  </option> 
                                                                            <option value="BSB"> BSB  </option> 
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
                                    </div>
                                    <div class="form-group row">  
                                        <label class="col-md-2 text-end control-label col-form-label">PRIBADI YANG BERSUNGGUH-SUNGGUH, DISIPLIN DAN MAMPU MENGENDALIKAN EMOSI </label>
                                        <div class="col-md-10 ">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="tabel_hafalan">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col" colspan="">#</th>
                                                                    <th scope="col" colspan="">Kompetensi</th>
                                                                    <th scope="col" colspan="">Nilai</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="customtable">
                                                                @foreach($penilaian2['D. MENJADI PRIBADI YANG BERSUNGGUH-SUNGGUH, DISIPLIN DAN MAMPU MENGENDALIKAN EMOSI'] as $defA => $aks)
                                                                <tr>
                                                                    <td>{{ $loop->iteration}}</td>
                                                                    <td>{{ ucwords($aks)}}</td>
                                                                    <th>
                                                                        <select class="select2 form-select shadow-none"
                                                                        style="width: 100%; height:36px;" name="nilai[{{$aks}}]" required>
                                                                      
                                                                        <optgroup label="Pilih Nilai">
                                                                           
                                                                            <option value="BM "> BM  </option> 
                                                                            <option value="BB"> BB  </option> 
                                                                            <option value="BSH"> BSH  </option> 
                                                                            <option value="BSB"> BSB  </option> 
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
                                    </div>
                                    <div class="form-group row">  
                                        <label class="col-md-2 text-end control-label col-form-label">KEMAMPUAN MEMBACA, MENGHAFAL, DAN MEMAHAMI AL-QUR’AN</label>
                                        <div class="col-md-10 ">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="tabel_hafalan">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col" colspan="">#</th>
                                                                    <th scope="col" colspan="">Kompetensi</th>
                                                                    <th scope="col" colspan="">Nilai</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="customtable">
                                                                @foreach($penilaian2['E. MEMILIKI KEMAMPUAN MEMBACA, MENGHAFAL, DAN MEMAHAMI AL-QUR’AN DENGAN BAIK'] as $defA => $aks)
                                                                <tr>
                                                                    <td>{{ $loop->iteration}}</td>
                                                                    <td>{{ ucwords($aks)}}</td>
                                                                    <th>
                                                                        <select class="select2 form-select shadow-none"
                                                                        style="width: 100%; height:36px;" name="nilai[{{$aks}}]" required>
                                                                      
                                                                        <optgroup label="Pilih Nilai">
                                                                           
                                                                            <option value="BM "> BM  </option> 
                                                                            <option value="BB"> BB  </option> 
                                                                            <option value="BSH"> BSH  </option> 
                                                                            <option value="BSB"> BSB  </option> 
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
                                    </div>
                                    @foreach($penilaian2['F. MEMILIKI WAWASAN YANG LUAS']['child'] as $wws => $ww)
                                    <div class="form-group row">  
                                        <label class="col-md-2 text-end control-label col-form-label">WAWASAN {{ $wws }} </label>
                                        <div class="col-md-10 ">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="tabel_hafalan">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col" colspan="">#</th>
                                                                    <th scope="col" colspan="">Kompetensi</th>
                                                                    <th scope="col" colspan="">Nilai</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="customtable">
                                                                @foreach($ww as $defA => $aks)
                                                                <tr>
                                                                    <td>{{ $loop->iteration}}</td>
                                                                    <td>{{ ucwords($aks)}}</td>
                                                                    <th>
                                                                        <select class="select2 form-select shadow-none"
                                                                        style="width: 100%; height:36px;" name="nilai[{{$aks}}]" required>
                                                                      
                                                                        <optgroup label="Pilih Nilai">
                                                                           
                                                                            <option value="BM "> BM  </option> 
                                                                            <option value="BB"> BB  </option> 
                                                                            <option value="BSH"> BSH  </option> 
                                                                            <option value="BSB"> BSB  </option> 
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
                                    </div>
                                    @endforeach
                                    <div class="form-group row">  
                                        <label class="col-md-2 text-end control-label col-form-label">PERTUMBUHAN </label>
                                        <div class="col-md-10 ">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="tabel_hafalan">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col" colspan="">#</th>
                                                                    <th scope="col" colspan="">Pertumbuhan</th>
                                                                    <th scope="col" colspan="">Nilai</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="customtable">
                                                              
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>BB</td>
                                                                    <th>
                                                                        <input type="number" class="form-control" name="nilai[bb]">
                                                                        
                                                                 
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>TB</td>
                                                                    <th>
                                                                        <input type="number" class="form-control" name="nilai[tb]">
                                                                        
                                                                 
                                                                    </th>
                                                                </tr><tr>
                                                                    <td>3</td>
                                                                    <td>LK</td>
                                                                    <th>
                                                                        <input type="number" class="form-control" name="nilai[lk]">
                                                                        
                                                                 
                                                                    </th>
                                                                </tr>
                                                           
                                                                
                                                           
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>

                                    <div class="form-group row">  
                                        <label class="col-md-2 text-end control-label col-form-label">PERKEMBANGAN </label>
                                        <div class="col-md-10 ">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="tabel_hafalan">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col" colspan="">#</th>
                                                                    <th scope="col" colspan="">Pertumbuhan</th>
                                                                    <th scope="col" colspan="">Nilai</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="customtable">
                                                              @foreach($perkembangan as $perk => $pk)
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>{{ $pk }}</td>
                                                                    <th>
                                                                        
                                                                       <textarea name="nilai[{{ $pk }}]" id="" cols="30" rows="10" class="form-control"></textarea> 
                                                                 
                                                                    </th>
                                                                </tr>
                                                               @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="form-group row">  
                                        <label class="col-md-2 text-end control-label col-form-label">EKSTRAKURIKULER </label>
                                        <div class="col-md-6 ">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="tabel_hafalan">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col" colspan="">#</th>
                                                                    <th scope="col" colspan="">Jenis Ekstrakurikuler</th>
                                                                    <th scope="col" colspan="">Nilai</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="customtable">
                                                              @foreach($ekstra as $perk => $pk)
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>{{ $pk }}</td>
                                                                    <th>
                                                                        
                                                                       <input name="nilai[{{ $pk }}]" type="number" class="form-control">
                                                                 
                                                                    </th>
                                                                </tr>
                                                               @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
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
    <script src="{{ asset('assets/extra-libs/DataTables/datatables.min.js') }}"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        
    </script>
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