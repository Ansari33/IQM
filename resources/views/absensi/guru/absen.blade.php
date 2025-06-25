<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    // container HTML untuk scanner QR Code
<div id="reader"></div>
.
.
.
//sesuaikan dengan di folder mana teman-teman menaruh file js HTML5-QRCode
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.8/html5-qrcode.min.js" integrity="sha512-r6rDA7W6ZeQhvl8S7yRVQUKVHdexq+GAlNkNNqVC7YyIV+NwqCTJe2hDWCiffTyRNOeGEzRRJ9ifvRm/HCzGYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    // inisiasi html5QRCodeScanner
    let html5QRCodeScanner = new Html5QrcodeScanner(
        // target id dengan nama reader, lalu sertakan juga 
        // pengaturan untuk qrbox (tinggi, lebar, dll)
        "reader", {
            fps: 10,
            qrbox: {
                width: 600,
                height: 600,
            },
        }
    );

    // function yang dieksekusi ketika scanner berhasil
    // membaca suatu QR Code
    function onScanSuccess(decodedText, decodedResult) {
        // redirect ke link hasil scan
        window.location.href = decodedResult.decodedText;

        alert(decodedResult)
        // membersihkan scan area ketika sudah menjalankan 
        // action diatas
        html5QRCodeScanner.clear();
    }

    // render qr code scannernya
    html5QRCodeScanner.render(onScanSuccess);
</script>
</body>
</html>