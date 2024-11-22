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