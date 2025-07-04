<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Absen Ustadzah</title>
    <!-- Favicon icon -->
   <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.min.css ') }}"  rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body style="align-items: center; text-align: center">
    <div class="main-wrapper " style="margin-top: 8%">
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
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        
        <div class="container-fluid" style="widows: 600px; "> 
            <div class="auth-wrapper d-flex  justify-content-center align-items-center " >
                
                <div class="auth-box border  border-outside align-items-center" style="width: 450px;">
                    <div id="loginform">
                        <img src="{{ asset('assets/images/iqm.png ') }}" alt="homepage" class="light-logo" style="margin-top: 20px"  />
                        <div class=" mb-3" style="margin-top: 5%">
                            <span class="" style="font-size: 14px; font-weight: bold ">SEKOLAH ISLAM TERPADU </span> <br>
                            <span class="" style="font-size: 13px; font-weight: bold">TKIT INSAN QUR'ANI MULIA BIMA</span> <br>
                            <br>
                            
                        </div>
                        <div class="row  ">
                                <div class="col-12">
                                    <div class="form-group">
                                        {{-- <div class="pt-"> --}}
                                            {{-- <button class="btn btn-info" id="to-recover" type="button"><i class="fa fa-lock me-1"></i> Lost password?</button> --}}
                                            <button class="btn btn-success  text-white" type="submit" style="width: 200px; "> <span id="status">Silahkan Scan QrCode</span> </button>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                            </div>
                        <!-- Form -->
                         <div id="reader"></div>
                        
                    </div>
                    <!--  -->
                </div>
            </div>
        </div>
        
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>

    $(".preloader").fadeOut();
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $('#to-login').click(function(){
        
        $("#recoverform").hide();
        $("#loginform").fadeIn();
    });
    </script>
        <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js ') }}" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.8/html5-qrcode.min.js" integrity="sha512-r6rDA7W6ZeQhvl8S7yRVQUKVHdexq+GAlNkNNqVC7YyIV+NwqCTJe2hDWCiffTyRNOeGEzRRJ9ifvRm/HCzGYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    // inisiasi html5QRCodeScanner
    let html5QRCodeScanner = new Html5QrcodeScanner(
        // target id dengan nama reader, lalu sertakan juga 
        // pengaturan untuk qrbox (tinggi, lebar, dll)
        "reader", {
            fps: 10,
            qrbox: {
                width: 250,
                height: 250,
            },
        }
    );

    // function yang dieksekusi ketika scanner berhasil
    // membaca suatu QR Code
    function onScanSuccess(decodedText, decodedResult) {
        // redirect ke link hasil scan
       // window.location.href = decodedResult.decodedText;

        //alert(decodedResult.decodedText)
        console.log(decodedResult.decodedText)
        
        // membersihkan scan area ketika sudah menjalankan 
        // action diatas
        html5QRCodeScanner.clear();
       $.ajax({
            url: "/absen/masuk/"+decodedResult.decodedText,
            success:function(res){
                
                alert(res.message)
                html5QRCodeScanner.render(onScanSuccess);
            },
            error:function(err) {
                console.log(err)
                html5QRCodeScanner.render(onScanSuccess);
            }
        })
        
        
    }

    // render qr code scannernya
    html5QRCodeScanner.render(onScanSuccess);

    
</script>

</body>

</html>