<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html' charset=utf-8">
    <title>Rapor</title>
</head>
<style>
    /**
    Set the margins of the page to 0, so the footer and the header
    can be of the full height and width !
     **/
    @page {
        margin: 0cm 0cm;
    }

    @font-face {
        font-family: "Arial";

    }

    /** Define now the real margins of every page in the PDF **/
    body {
        margin-top: 3cm;
        margin-left: 1cm;
        margin-right: 1cm;
        margin-bottom: 2cm;
        font-family: 'Times New Roman', Times, serif;
        font-size: 10px;
        /* border-style: double; */
    }

    /** Define the header rules **/
    header {
        position: fixed;
        top: 2cm;
        left: 2cm;
        right: 0cm;
        height: 0cm;
        padding-bottom: 4, 5cm;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14;
    }

    /** Define the footer rules **/
    footer {
        position: fixed;
        bottom: 0cm;
        left: 0cm;
        right: 0cm;
        height: 4cm;
        counter-increment: footer;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
    }

    main {
        background-color: #ffffff;
        position: relative;
    }

    /*li {*/
    /*    padding: 2px;*/
    /*    list-style: none;*/
    /*}*/

    .list-none {
        padding: 2px;
        list-style: none;
    }

    .page-break {
        page-break-after: always;
    }
</style>
@php
    

    function setCustomDate()  {
        $bulan = [
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember',
    ];
        $arTgl = explode('-',strval(date('d-m-Y'))) ;
        return $arTgl[0].' '.$bulan[$arTgl[1]].' '.$arTgl[2];
    }
@endphp
<body>
    <header>
        <span style="">Kelompok {{$data['siswa']['kelas_siswa']['kelas']['nama']}} </span>
        <span style="margin-left: 40%; ">TAHUN AJARAN {{$data['tahun_ajaran']}}</span>
    </header>
    <footer>


        <style>
            .pagen:before {
                counter-increment: jumhal;
                content: counter(jumhal);
                margin-left: 90%
            }

            /*.pagen:after{*/
            /*    content: "of : " counter(footer);*/
            /*}*/
        </style>

        <div style="padding-left: 50px; font-size: 12">
            <p style="margin-left: 50%" class="pagen"> </p>
            TK ISLAM TERPADU INSAN QUR’ANI MULIA <br>
            Keterangan: BM=Belum Muncul, BB=Berkembang Baik, BSH=Berkembang Sesuai Harapan,<br>
            BSB=Berkembang Sangat Baik


        </div>
    </footer>

    <main>

        <div id="sampul">
            <span style="margin-left: 40%; margin-top: 60px; font-size: 16">BUKU LAPORAN </span>
            <br>
            <div style="height: 3%"></div>
            <span style="margin-left: 30%; font-size: 12; ">PENILAIAN PERKEMBANGAN SISWA </span>
            <br>
            <span style="margin-left: 38%; font-size: 12;">TK ISLAM TERPADU</span>
            <br>
            <span style="margin-left: 36%; margin-top: 60px; font-size: 12">INSAN QUR'ANI MULIA </span>
            <br>

            @if(url('') == 'http://localhost:8000')
            <img src="{{ public_path('assets/images/iqm-tk.png') }}" alt=""
                style="margin-left: 37%; margin-top: 6%; margin-bottom: 6%" width="190px">
            @else    
            <img src="{{ url('assets/images/iqm-tk.png') }}" alt=""
            style="margin-left: 37%; margin-top: 6%; margin-bottom: 6%" width="190px">    
            @endif
            <br>
            <span style="margin-left: 40%; margin-top: 60px; margin-bottom: 60px; font-size: 14">KELOMPOK TK A </span>
            <br>
            <div style="height: 65px;"></div>
            <span style="margin-left: 40%; margin-top: 5%; font-size: 14;">NAMA SISWA </span>
            <div style="height: 15px;"></div>
            <p style="text-align: center; font-size: 14;">{{ strtoupper($data['siswa']['nama']) }}</p>
            <div style="height: 5px;"></div>
            <hr style="width: 47%; margin-bottom: 40px; margin-left: 25%;">
            <span style="margin-left: 39%; font-size: 14">NOMOR INDUK </span>
            <br>
            <div style="height: 15px;"></div>
            <p style="text-align: center; font-size: 14">{{  $data['siswa']['nis_nisn'] }} </p>
            <br>
            <div style="height: 5px;"></div>
            <hr style="width: 25%; margin-left: 35%">

        </div>
        <div class="page-break"></div>
        <div id="sampul-2">
            <span style=" text-align: center; margin-left: 15%; font-size: 12;">LEMBAGA PENGEMBANGAN DAN PEMBERDAYAAN
                MASYARAKAT (LPPM)</span><br>
            <span style="margin-left: 12%; font-size: 12;">ALAMAT : DUSUN RATO BARU RT 11/RW 03 DESA RATO KEC. LAMBU
                KAB. BIMA <br></span>
            <span style="margin-left: 38%; font-size: 12;">NUSA TENGGARA BARAT</span>
            <br>
            <div style="height: 65px;"></div>
            <span style="margin-left: 35%; margin-top: 60px; font-size: 14">TK IT INSAN QUR'ANI MULIA </span>
            <br>
            @if(url('') == 'http://localhost:8000')    
            <img src="{{ public_path('assets/images/iqm-tk.png') }}" alt=""
                style="margin-left: 40%; margin-top: 6%" width="190px">
            @else    
            <img src="{{ url('assets/images/iqm-tk.png') }}" alt=""
            style="margin-left: 40%; margin-top: 6%" width="190px">    
            @endif

            <table style="font-size: 14; padding: 35px;" cellpadding="10px; margin-left : 20px;">
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{ $data['siswa']['nama'] }}</td>
                </tr>
                <tr>
                    <td>Desa</td>
                    <td>:</td>
                    <td>{{ $data['siswa']['desa'] }}</td>
                </tr>
                <tr>
                    <td>Kecamatan</td>
                    <td>:</td>
                    <td>{{ $data['siswa']['kecamatan'] }}</td>
                </tr>
                <tr>
                    <td>Kabupaten</td>
                    <td>:</td>
                    <td>Bima</td>
                </tr>
                <tr>
                    <td>Provinsi</td>
                    <td>:</td>
                    <td>Nusa Tenggara Barat</td>
                </tr>
            </table>
        </div>
        <div class="page-break"></div>
        <div id="sampul-2">
            <span style=" text-align: center; margin-left: 15%; font-size: 12;">LEMBAGA PENGEMBANGAN DAN PEMBERDAYAAN
                MASYARAKAT (LPPM)</span><br>
            <span style="margin-left: 12%; font-size: 12;">ALAMAT : DUSUN RATO BARU RT 11/RW 03 DESA RATO KEC. LAMBU
                KAB. BIMA <br></span>
            <span style="margin-left: 38%; font-size: 12;">NUSA TENGGARA BARAT</span>
            <br>
            <div style="height: 65px;"></div>
            <span style="margin-left: 35%; margin-top: 60px; font-size: 14">Bismillahirrahirrahmaanirrahim </span>
            <br>
            <div style="height: 20px;"></div>
            <span style="margin-left: 35%; margin-top: 60px; font-size: 14">Jika anak Adam meninggal dunia</span>
            <br>
            <div style="height: 20px;"></div>
            <span style="margin-left: 30%; margin-top: 60px; font-size: 14">Terputuslah amalannya, kecuali tiga perkara
                :</span>
            <br>
            <div style="height: 20px;"></div>
            <div style="margin-top: 15%; margin-left: 5%; font-size: 14;">
                <ol>
                    <li>Shodaqoh Jariyah</li>
                    <li>Ilmu yang bermanfaat</li>
                    <li>Anak yang sholeh yang selalu mendo’akan kedua orang tuanya</li>
                </ol>
            </div>

        </div>
        <div class="page-break"></div>
        <div style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 12; font-style: italic; ">

             <p style=" font-style: normal; text-align: center"><strong> PESAN ANANDA UNTUK AYAH DAN
                    IBU</strong> </p>
            <br>

           <p style="margin-left: 5%">Bismillahirrahmanirrahim</p> 
            <br>

           <p style="margin-left: 7%">Kepada</p> 
            
           <p style="margin-left: 5%">Ayah & Ibu yang selalu ku cinta</p> 
          
            <p style="margin-left: 7%">Di Rumah</p> 
            <br>
            Assalamu’alaikum warahmatullahi wabarakatuh
            <br>
            <div style="padding-bottom: 5px; padding-top: 15px;">
                <span style="margin-left: 8%">Ayah ibu Alhamdulillah atas karunia-Nya aku masih bisa menuntut ilmu
                    sampai detik ini.</span>
                Semoga Allah selalu memberikan kesempatan ini kepadaku sampai akhir kehidupan nanti.
                Do’akan aku ya ibu, semoga aku bukan termasuk yang menyia-nyiakan waktu yang telah diberikan
                Allah kepadaku.
                Ayah ibu, kata ustadzah buku ini adalah laporan penilaian Perkembangan selama
                belajar di TK Islam Terpadu Insan Qur’ani Mulia yang dibagi setiap semester satu kali.
                Jadi ayah dan ibu bisa mengetahui perkembanganku melalui buku ini. Dibuku ini ada nilainya, ada
                yang baik, ada yang kurang baik dan itu artinya aku harus terus belajar.
                Ayah ibu, jangan kaget ya, jangan marah , jangan kecewa dan jangan juga sedih. Aku
                memang masih seperti ini dan aku masih selalu membutuhkan bimbingan, bantuan, tauladan terutama
                dari ayah , ibu dan juga dari ustadzah.
                Kata ustadzah hasil laporan ini bukan yang terakhir tetapi masih banyak yang masih
                bisa aku kerjakan, aku kembangkan dan aku selesaikan untuk menjadikan diriku lebih baik lagi.
                <br>
                <span style="margin-left: 8%"> Ayah ibu, ketika nilai dalam laporan ini baik dan memuaskan, ananda juga
                    berharap</span>
                Ayah ibu, ketika nilai dalam laporan ini baik dan memuaskan, ananda juga berharap
                ayah dan ibu jangan terlalu bahagia, jangan terlalu senang, bangga, puas, dan dsb, karena kata
                Rasulullah SAW kita tidak boleh berlebihan dalam segala sesuatu. Sebaliknya jika kita
                ternyata nilai anaknda kurang dan belum memuaskan, ananda berharap ayah dan ibu tidak terlalu
                bersedih, tidak juga berputus asa, karena aku akan terus berusaha untuk menjadi yang lebih baik lagi
                tentunya dengan bimbingan dan bantuan ayah dan ibu.
                Ayah ibu, akhirnya hanya kepada Allah saja lah kita berserah diri, semoga Allah
                selalu memberikan hidayah, pertolongan dan kasih sayang Nya kepada kita semua. Ayah ibu
                rangkullah aku dalam do’a malam mu, semoga Dia membimbing langkahku. Dengan ketulusan hati
                yang dalam ma’afkanlah anakmu ini.
                <br>
               <p  style="margin-left: 8%">Wassalamu’alaikum warahmatullahi wabarakatuh</p>  
               <p  style="margin-left: 15%">Yang selalu mengharap bimbinganmu</p> 
               <p  style="margin-left: 20%">Ananda</p>
                
            </div>
            <div class="page-break"></div>
            <div style="font-family: 'Times New Roman', Times, serif; font-size: 14; font-style: normal">

                <p style="text-align: center"><strong> PETUNJUK PENGGUNAAN</strong> </p>
                <br>

                Bismillahirrahmanirrahim
                <br>
                <ol style="justify-items: center">
                    <li>Buku laporan perkembangan anak didik TK Islam terpadu Insan Qur’ani Mulia ini disusun untuk
                        mengamati perkembangan perilaku dan jasmani anak didik yang meliputi tingkat pengetahuan anak,
                        motorik/gerak baik kasar atau halus serta tingkat perkembangan sikap anak. Penilaian atau
                        evaluasi dilakukan melalui bidang-bidang perkembangan yang ada di TK Islam Terpadu Insan Qur’ani
                        Mulia.</li>
                    <li>Bidang-bidang perkembangannya, terdiri dari:
                        <ol type="a">
                            <li>
                                Kompetensi Dasar Keislaman
                                <ul type="disk">
                                    <li>Aqidah Ibadah</li>
                                    <li>Moral & Nilai Agama (Akhlaetensik)</li>
                                    <li>Hafalan Al-Qur’an, Hadist, Do’a dan Mengaji</li>
                                </ul>
                            </li>
                            <li>
                                Kompetensi Dasar Umum meliputi:
                                <ul type = "disk">
                                    <li>Sosial Emosional</li>
                                    <li>Bahasa </li>
                                    <li>Kognitif</li>
                                    <li>Fisik Motorik
                                        <br>
                                        Bidang-bidang perkembangan tersebut diwujudkan dalam bentuk kegiatan di
                                        Area-Area yaitu:
                                        <ol type="a">
                                            <li>Area Drama</li>
                                            <li>Area Persiapan</li>
                                            <li>Area Balok</li>
                                            <li>Area Explorasi</li>
                                            <li>Area Agama</li>
                                        </ol>
                                    </li>
                                </ul>
                            </li>
                        </ol>

                    </li>
                    <li>Fungsi dari evaluasi atau penilaian perkembangan anak didik adalah untuk meningkatkan motivasi
                        belajar anak, dengan syarat, penilaian harus dilakukan dengan adil, tidak membunuh karakter anak
                        didik dan tetap menghargai semua kemampuan yang dicapai anak didik. Selain itu evaluasi harus
                        dilakukan dengan tepat karena bila evaluasi yang tidak tepat justru akan menghambat belajar
                        anak. Teknik evaluasi dilakukan dengan observasi langsung pada kegiatan harian anak maupun hasil
                        kerja anak didik.
                    </li>
                    <li>Ciri penilaian perkembangan anak didik TK Islam Terpadu Insan Qur’ani Mulia adalah penjiwaan
                        agama islam yang bertumpu pada akhlak dan kepemimpinan yang meliputi: keberanian, tanggung
                        jawab, kerja sama, kemandirian, sopan santun, setia kawan dan inisiatif (keinginan yang muncul
                        dari diri sendiri)
                        <br>
                        Arti Skor pada Nilai Komulatif:
                        <table>
                            <tr>
                                <td>BM</td>
                                <td>:</td>
                                <td>Belum Muncul</td>
                            </tr>
                            <tr>
                                <td>BB</td>
                                <td>:</td>
                                <td>Berkembang Baik</td>
                            </tr>
                            <tr>
                                <td>BSH</td>
                                <td>:</td>
                                <td>Berkembang Sesuai Harapan</td>
                            </tr>
                            <tr>
                                <td>BSB</td>
                                <td>:</td>
                                <td>Berkembang Sangat Baik</td>
                            </tr>
                        </table>
                    </li>
                    <li>Buku Laporan Penilaian Perkembangan Anak didik TK Islam Terpadu Insan Qur’ani Mulia dilengkapi
                        dengan pas photo Berwarna ukuran 3x4 cm</li>
                    <li>Semoga buku ini dapat bermanfaat bagi para guru/orang tua murid Insan Qur’ani Mulia. Aamiin.
                    </li>

                </ol>




            </div>

        </div>
        <div class="page-break"></div>
        <div style="padding: 10px; font-size: 14">
            <span style="margin-left: 33%; margin-bottom: 15%">KETERANGAN DIRI ANAK DIDIK</span>
            <div style="height: 3%"></div>

            <table style="width: 100%" cellpadding=10px;>

                <tr>
                    <td>Nama Anak Didik</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td>{{$data['siswa']['nama']}}</td>
                </tr>
                <tr>
                    <td>Nama Panggilan</td>
                    <td>:</td>
                    <td>{{$data['siswa']['nama']}}</td>
                </tr>
                <tr>
                    <td>Nomor Induk</td>
                    <td>:</td>
                    <td>{{$data['siswa']['nis_nisn']}}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>{{$data['siswa']['kelamin']}}</td>
                </tr>
                <tr>
                    <td>Tempat/Tanggal Lahir</td>
                    <td>:</td>
                    <td>{{$data['siswa']['tempat_lahir']}}, {{$data['siswa']['tanggal_lahir']}}</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{$data['siswa']['agama']}}</td>
                </tr>
                <tr>
                    <td>Nama Ayah</td>
                    <td>:</td>
                    <td>{{$data['siswa']['ayah']}}</td>
                </tr>
                <tr>
                    <td>Nama Ibu</td>
                    <td>:</td>
                    <td>{{$data['siswa']['ibu']}}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{$data['siswa']['alamat']}}</td>
                </tr>
                <tr>
                    <td>No. Telp</td>
                    <td>:</td>
                    <td>{{$data['siswa']['kontak_wali']}}</td>
                </tr>
                <tr>
                    <td rowspan="3" style="text-align: left;align-items: flex-start">
                        @if(url('') == 'http://localhost:8000')
                            @if($data['siswa']['foto'] != null)
                          <img src="{{ public_path('foto-siswa/'.$data['siswa']['foto']) }}" alt=""
                            style="margin-left: 15%; margin-top: 6%; " width="130px" height="150px;">
                            @else
                            <img src="{{ public_path('assets/images/iqm-tk.png') }}" alt=""
                            style="margin-left: 15%; margin-top: 6%; " width="130px" height="150px;">
                            @endif 
                        @else
                       {{-- <img src="{{url('foto-siswa/'.$data['siswa']['foto'] )}}" alt=""
                        style="margin-left: 15%; margin-top: 6%; " width="130px" height="150px;"> --}}
                        @if($data['siswa']['foto'] != null)
                          <img src="{{url('foto-siswa/'.$data['siswa']['foto'] )}}" alt=""
                        style="margin-left: 15%; margin-top: 6%; " width="130px" height="150px;">
                            @else
                            <img src="{{ url('assets/images/iqm-tk.png') }}" alt=""
                        style="margin-left: 15%; margin-top: 6%; " width="130px" height="150px;">
                            @endif 
                        @endif
                    </td>

                    <td colspan="2" style="text-align: right" align="right">Rato,11 Desember 2023 <br>

                    </td>
                    {{-- <td></td> --}}
                </tr>
                {{-- <tr>
                <td></td>
                <td colspan="2" style="text-align: right">Kepala TK Islam Terpadu INSAN QUR’ANI MULIA</td>
                {{-- <td></td> 
            </tr> --}}
                <tr>
                    <td></td>
                    <td colspan="2" style="text-align: right">
                        <div style="align-items: stretch">
                            Kepala TK Islam Terpadu INSAN QUR’ANI MULIA <br>

                            {{-- <img src="{{ public_path('assets/images/ttd.png') }}" alt=""
                                style="margin-right: -30%; margin-top: 3%;" height="100px;"> --}}


                            <p style="text-align: center; margin-top: 85px;"> <u>{{ strtoupper($data['kepsek']['nama']) }}</u> </p>
                        </div>


                    </td>
                    {{-- <td></td> --}}
                </tr>
            </table>





        </div>
        <div class="page-break"></div>
        <div style="padding: 10px; font-size: 14; align-items: center">
            <p style=" margin-bottom: 5%; font-size: 40; text-align: center "><strong>KELOMPOK {{$data['siswa']['kelas_siswa']['kelas']['nama']}}</strong> </p>
            <div style="height: 10%"></div>
            <p style="text-align: center; margin-bottom: 15%; font-size: 38; ">SEMESTER {{$data['semester']}}</p>
            <div style="height: 3%"></div>
            <p style="text-align: justify; margin: 3%; align-items: justify;">“Tiada sesuatu yang diberikan oleh
                seorang ayah kepada anaknya yang lebih utama
                dari yang lebih utama daripada budi pekerti yang baik”</p>
            <br>
            <p style="text-align: center; ">(H.R. Tirmidzi)</p>
        </div>
        <div class="page-break"></div>
        <div style="font-size: 14">
            <p style="text-align: center">LAPORAN PENCAPAIAN PERKEMBANGAN ANAK <br>
                TK ISLAM TERPADU INSAN QUR’ANI MULIA
            </p>
            <div style="height: 3%"></div>

            <table style="width: 100%" cellpadding=10px;>

                <tr>
                    <td>Kelompok TK</td>
                    <td>:</td>
                    <td>{{$data['siswa']['kelas_siswa']['kelas']['nama']}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nama </td>
                    <td>:</td>
                    <td>{{$data['siswa']['nama']}}</td>
                    <td style="text-align: right">Semester {{$data['semester']}} </td>
                </tr>
            </table>
            @php
                $penilaian = [
                    'Program Keislaman' => [
                        'bidang pengembangan' => [
                            'Hafalan Al Qur’an & Surah Pendek' => ["An-Naba'","An-Naazi'at", 'Abasa', 'At-Takwir', 'Al-Infitar', 'Al-Mutaffiffin', 'Al-Insyiqaq', 'Al-Buruuj', 'At-Tariq', 'Al- A’la', 'Al-Gasyiyah', 'Al-Fajr', 'Al-Balad', 'As-Syams', 'Al- Lail', 'Ad- Duha', 'Al-Insyirah', 'At-Tin', 'Al-Alaq', 'Al- Qadr', 'Al-Bayyinah', 'Al-Zalzalah', 'Al-Aadiyat', 'Al-Qoriah', 'At-Takatsur', 'Al-Asr', 'Al-Humazah', 'Al-Fiil', 'Al-Quraisy', 'Al-Maa’un', 'Al-Kautsar', 'Al-Kaafirun', 'An-Nasr', 'Al-Lahab', 'Al-Ikhlas', 'Al-Falaq', 'An-Naas'],
                            "Hafalan Do'a" => ['Sebelum Belajar', 'Kebaikan Dunia dan Akhirat', 'Bepergian', 'Naik Kendaraan', 'Sebelum Makan', 'Sesudah Makan', 'Untuk Orang Tua', 'Sebelum Tidur', 'Bangun Tidur', 'Masuk Wc', 'Berpakaian', 'Masuk Kamar Mandi', 'Keluar Kamar Mandi', 'Khotmil Qur’an', 'Masuk Mesjid', 'Keluar Mesjid', 'Sesudah Adzan', 'Turun Hujan', 'Penutup Majelis'],
                            'Hafalan Hadits' => ['Jangan Makan dan Minum Sambil Berdiri', 'Jangan Suka Marah', 'Sesama Muslim Bersaudara', 'Wajib Menuntut Ilmu', 'Berbuat Baik', 'Menutup Aurat', 'Menyebarkan salam', 'Keutamaan Belajar Al-quran', 'Kasih Sayang', 'Menjaga Kebersihan'],
                        ],
                    ],
                ];

                $nilai = json_decode($data['nilai'],true);

            @endphp
            @foreach ($penilaian as $item => $it)
                <p> <strong> {{ $item }} </strong> </p>
                <div style="margin-bottom: 5%">
                    <table
                        style="width: 100%; margin-bottom: 1%; font-size: 14; border-collapse: collapse; border-style: solid; page-break-after: auto;"cellpadding="10px;"
                        border="1">
                        <tr>
                            <th rowspan="2">Bidang Pengembangan</th>
                            <th rowspan="2">Indikator Kompetensi</th>
                            <th colspan="4" align="center">NILAI</th>
                        </tr>
                        <tr>

                            <th>BM</th>
                            <th>BB</th>
                            <th>BSH</th>
                            <th>BSB</th>
                        </tr>
                        @foreach ($it['bidang pengembangan'] as $bidang => $bd)
                            @foreach ($bd as $indikator => $ik)
                            
                                <tr>

                                    <td rowspan="">{{ $bidang }}</td>
                                    <td>{{ $ik }}</td>
                                    <td>@if ($nilai[$ik] == 'BM') X @endif</td>
                                    <td>@if ($nilai[$ik] == 'BB') X @endif</td>
                                    <td>@if ($nilai[$ik] == 'BSH') X @endif</td>
                                    <td>@if ($nilai[$ik] == 'BSB') X @endif</td>

                                </tr>
                            @endforeach
                        @endforeach

                    </table>
                </div>
            @endforeach
            <div class="page-break"></div>
            <p> <strong> Program Pengembangan Bahasa Arab & Inggris </strong> </p>
            <div style="margin-bottom: 5%">
                <table
                    style="width: 100%; margin-bottom: 1%; font-size: 14; border-collapse: collapse; border-style: solid; page-break-after: auto;"cellpadding="10px;"
                    border="1">
                    <tr>

                        <th rowspan="2">Aspek Yang Diamati</th>
                        <th colspan="4" align="center">NILAI</th>
                    </tr>
                    <tr>

                        <th>BM</th>
                        <th>BB</th>
                        <th>BSH</th>
                        <th>BSB</th>
                    </tr>

                    <tr>

                        <td colspan="5"><strong>Bahasa Arab</strong> </td>


                    </tr>
                    <tr>

                        <td rowspan="">Mengenal Bahasa Arab Angka </td>
                        <td>@if ($nilai['Mengenal Bahasa Arab Angka'] == 'BM') X @endif</td>
                        <td>@if ($nilai['Mengenal Bahasa Arab Angka'] == 'BB') X @endif</td>
                        <td>@if ($nilai['Mengenal Bahasa Arab Angka'] == 'BSH') X @endif</td>
                        <td>@if ($nilai['Mengenal Bahasa Arab Angka'] == 'BSB') X @endif</td>

                    </tr>
                    <tr>

                        <td rowspan="">Mengenal Kata Benda ada di Sekolah</td>
                        <td>@if ($nilai['Mengenal Kata Benda ada di Sekolah'] == 'BM') X @endif</td>
                        <td>@if ($nilai['Mengenal Kata Benda ada di Sekolah'] == 'BB') X @endif</td>
                        <td>@if ($nilai['Mengenal Kata Benda ada di Sekolah'] == 'BSH') X @endif</td>
                        <td>@if ($nilai['Mengenal Kata Benda ada di Sekolah'] == 'BSB') X @endif</td>

                    </tr>
                    <tr>

                        <td colspan="5"> <strong>Bahasa Inggris</strong> </td>


                    </tr>
                    <tr>

                        <td rowspan="">Mengenal Anggota Badan </td>
                        <td>@if ($nilai['Mengenal Anggota Badan'] == 'BM') X @endif</td>
                        <td>@if ($nilai['Mengenal Anggota Badan'] == 'BB') X @endif</td>
                        <td>@if ($nilai['Mengenal Anggota Badan'] == 'BSH') X @endif</td>
                        <td>@if ($nilai['Mengenal Anggota Badan'] == 'BSB') X @endif</td>

                    </tr>
                    <tr>

                        <td rowspan="">Mengenal Anggota Keluarga</td>
                        <td>@if ($nilai['Mengenal Anggota Keluarga'] == 'BM') X @endif</td>
                        <td>@if ($nilai['Mengenal Anggota Keluarga'] == 'BB') X @endif</td>
                        <td>@if ($nilai['Mengenal Anggota Keluarga'] == 'BSH') X @endif</td>
                        <td>@if ($nilai['Mengenal Anggota Keluarga'] == 'BSB') X @endif</td>

                    </tr>
                    <tr>

                        <td rowspan="">Mengenal Angka</td>
                        <td>@if ($nilai['Mengenal Angka'] == 'BM') X @endif</td>
                        <td>@if ($nilai['Mengenal Angka'] == 'BB') X @endif</td>
                        <td>@if ($nilai['Mengenal Angka'] == 'BSH') X @endif</td>
                        <td>@if ($nilai['Mengenal Angka'] == 'BSB') X @endif</td>


                    </tr>

                </table>
            </div>

            <p> <strong> Mengaji / Membaca </strong> </p>
            <div style="margin-bottom: 5%">
                <table
                    style="width: 100%; margin-bottom: 1%; font-size: 14; border-collapse: collapse; border-style: solid; page-break-after: auto;"cellpadding="10px;"
                    border="1">
                    <tr>

                        <th rowspan="2">Aspek Yang Diamati</th>
                        <th colspan="4" align="center">NILAI</th>
                    </tr>
                    <tr>

                        <th>BM</th>
                        <th>BB</th>
                        <th>BSH</th>
                        <th>BSB</th>
                    </tr>
                    <tr>

                        <td rowspan="">
                            Ilman Wa Ruuhan <br>
                            Jilid <span> <strong>1</strong></span> Hal <span> <strong>1</strong></span>
                        </td>
                        <td>@if ($nilai['Ilman Wa Ruuhan'] == 'BM') X @endif</td>
                        <td>@if ($nilai['Ilman Wa Ruuhan'] == 'BB') X @endif</td>
                        <td>@if ($nilai['Ilman Wa Ruuhan'] == 'BSH') X @endif</td>
                        <td>@if ($nilai['Ilman Wa Ruuhan'] == 'BSB') X @endif</td>

                    </tr>


                </table>
            </div>





        </div>
        <div class="page-break"></div>
        <div style="font-size: 14">
            <p style="text-align: center">LAPORAN PENCAPAIAN PERKEMBANGAN ANAK <br>
                TK ISLAM TERPADU INSAN QUR’ANI MULIA
            </p>
            <div style="height: 3%"></div>

            <table style="width: 100%" cellpadding=2px;>

                <tr>
                    <td>Semester </td>
                    <td>:</td>
                    <td>{{ $data['semester'] }}</td>
                    <td></td>
                </tr>

                <tr>
                    <td>Kelompok TK</td>
                    <td>:</td>
                    <td>{{ $data['siswa']['kelas_siswa']['kelas']['nama'] }}</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Nama </td>
                    <td>:</td>
                    <td>{{ $data['siswa']['nama'] }}</td>
                    <td style="text-align: right"> </td>
                </tr>
                <tr>
                    <td>Nomor Induk </td>
                    <td>:</td>
                    <td>{{ $data['siswa']['nis_nisn'] }}</td>
                    <td style="text-align: right"></td>
                </tr>
            </table>
            @php
                $penilaian2 = [
                    'A. MEMILIKI AQIDAH YANG LURUS' => ['Mengenal Rukun Islam dan Rukun Iman', 'Melafalkan Asma’ul Husna', 'Mengenal dan Berlatih Ikhlas dalam Beramal', 'Mengenal Allah sebagai Pencipta, Pemberi rezeki dan Pemilik', 'Mengenal Allah Melalui ciptaan-Nya', 'Mengenal dan Berlatih Mengucapkan kalimat thoyyibah', 'Bangga Sebagai Anak Muslim', 'Mengenal Hal-Hal yang Ghaib', 'Mengenal Rasa Syukur Kepada Allah'],
                    'B. MEMILIKI IBADAH YANG BENAR' => ['Mengenal dan berlatih tata cara wudhu dengan benar', 'Mengenal dan berlatih adzan dan iqomah', 'Mengenal dan berlatih gerakan dan bacaan sholat', 'Mengenal dan berlatih tata cara sholat berjamaah', 'Mengenal dan berlatih macam-macam sholat wajib', 'Mengenal dan berlatih berdzikir kepada Allah', 'Berlatih puasa di bulan Ramadhan', 'Mengenal dan berlatih kebiasaan berinfaq', 'Terbiasa mengucapkan salam', 'Mengenal dan berlatih menutup aurat', 'Terbiasa berdo’a dalam setiap aktivitas', 'Berlatih manasik haji', 'Mengenal zakat fitrah', 'Mengenal dan berlatih niat ibadah karena Allah', 'Mengenal dan berlatih berdo’a ba’da sholat', 'Mengenal perbuatan yang disukai dan tidak disukai'],
                    'C. MEMILIKI KEPRIBADIAN YANG MATANG DAN BERAKHLAK MULIA' => ['Mengenal diri dengan benar', 'Mengenal perbedaan jenis kelamin', 'Mengenal mengungkapkan emosi (mengenal emosi, menamakan emosi, mengungkapkan emosi)', 'Mampu menunjukan sikap inisiatif dan mandiri', 'Belajar dan berlatih sikap tawadhu dan menghormati orang lain', 'Berlatih bersikap pemberani dalam menyampaikan nilai-nilai kebenaran', 'Berlatih memperhatikan orang lain berbicara', 'Berlatih membangun hubungan dengan orang lain.', 'Berbakti kepada kedua orang tua.', 'Belajar dan berlatih senang menerima tamu', 'Belajar dan berlatih senyum, salam dan sapa (3S)', 'Berlatih menghargai perbedaan dan berempati kepada orang lain.', 'Berlatih menumbuhkan sikap hidup dan membiasakan berperilaku ramah lingkungan (go green)'],
                    'D. MENJADI PRIBADI YANG BERSUNGGUH-SUNGGUH, DISIPLIN DAN MAMPU MENGENDALIKAN EMOSI' => ['Membiasakan diri hadir disekolah tepat waktu', 'Mengenal dan berlatih mengikuti berbagai aturan', 'Belajar dan berlatih persiapan menulis', 'Belajar dan berlatih persiapan membaca', 'Belajar dan berlatih membiasakan diri berpakaian rapi dan menjaga barang miliknya ', 'Mengenal fungsi dan manfaat benda', 'Berlatih mengenal perbedaan jenis kelamin', 'Berlatih dan belajar mengendalikan emosi ', 'Berlatih dan belajar mengenal lingkungan sekitar', 'Mengenal perbuatan baik dan mengajak orang lain berbuat baik'],
                    'E. MEMILIKI KEMAMPUAN MEMBACA, MENGHAFAL, DAN MEMAHAMI AL-QUR’AN DENGAN BAI' => ['Mengenal huruf hijaiyah dan tanda bacanya', 'Melafalkan minimal 5 surat pendek dalam Al-Qur’an yang ada di juz 30'],
                    'F. MEMILIKI WAWASAN YANG LUAS' => [
                        'child' => [
                            'Dalam Bidang Keislaman' => ['Mengenal dan melafalkan minimal 5 hadist pendek (penggalan hadist)', 'Mengenal Rasulullah (ash Shiroh Nabawiyah) di masa anak-anak', 'Mengenal kisah sahabat yang dijamin masuk surga', 'Mengenal Khulafaur Rosyidin'],
                            'Dalam Bidang Umum' => ['Memiliki perilaku yang mencerminkan sikap ingin tahu', 'Memiliki perilaku yang mencerminkan sikap kreatif', 'Mengenal benda-benda disekitarnya', 'Mengenal lingkungan social', 'Mengenal lingkungan alam (hewan, tanaman, cuaca, tanah, air, batu-batuan, dll', 'Mengenal teknologi sederhana', 'Mengenal berbagai karya dan aktivitas seni'],
                            'Kesehatan dan Kebugaran' => ['Mengenal dan berlatih memilih makanan dan minuman yang halal dan sehat', 'Mengenal dan berlatih cara makan dan minum sesuai sunnah', 'Mengenal manfaat hidup sehat.', 'Mengenal anggota tubuh, fungsi dan gerakannya untuk pengembangan motoriknya', 'Mengenal waktu-waktu makan', 'Makan tanpa bantuan orang lain', 'Merapikan peralatan makan tanpa bantuan orang lain.', 'Mengenal P3K', 'Mengenal fungsi dan merawat tubuh', 'Olahraga sambil bermain', 'Berlatih dan mengenal gerakan-gerakan tubuh'],
                            'Life Skill dan Jiwa Wira Usaha' => ['Mampu menolong diri sendiri', 'Berlatih membuat dan mempresentasikan karyanya', 'Memiliki perilaku yang mencerminkan sikap percaya diri', 'Memahami bahasa reseptif (menyimak)', 'Memahami bahasa Ekspresif (Mengungkapkan bahasa verbal dan non verbal)', 'Mengenal keaksaraan awal melalui bermain', 'Belajar menyelesaikan tugas tanpa bantuan orang lain', 'Belajar mengungkapkan ide dan gagasan'],
                        ],
                    ],
                ];

            @endphp
            @foreach ($penilaian2 as $item => $it)
                @if (array_key_exists('child', $it))
                    <p> <strong>{{ $item }}</strong> </p>
                    @foreach ($it['child'] as $child => $ch)
                        <div style="margin-bottom: 5%">
                            <table
                                style="width: 100%; margin-bottom: 5%; font-size: 14; border-collapse: collapse; border-style: solid; page-break-after: auto;"cellpadding="10px;"
                                border="1">
                                <caption>
                                    <p> <strong> {{ $loop->iteration . '. ' . $child }} </strong> </p>
                                </caption>
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Kompetensi</th>
                                    <th colspan="4" align="center">NILAI</th>
                                </tr>
                                <tr>

                                    <th>BM</th>
                                    <th>BB</th>
                                    <th>BSH</th>
                                    <th>BSB</th>
                                </tr>

                                @foreach ($ch as $bidang => $bd)
                                    <tr>

                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $bd }}</td>
                                        <td>@if ($nilai[$bd] == 'BM') X @endif</td>
                                        <td>@if ($nilai[$bd] == 'BB') X @endif</td>
                                        <td>@if ($nilai[$bd] == 'BSH') X @endif</td>
                                        <td>@if ($nilai[$bd] == 'BSB') X @endif</td>

                                    </tr>
                                @endforeach
                            </table>

                        </div>
                    @endforeach
                @else
                    <div style="margin-bottom: 5%">
                        <table
                            style="width: 100%; margin-bottom: 5%; font-size: 14; border-collapse: collapse; border-style: solid; page-break-after: auto;"cellpadding="10px;"
                            border="1">
                            <caption>
                                <p> <strong> {{ $item }} </strong> </p>
                            </caption>
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Kompetensi</th>
                                <th colspan="4" align="center">NILAI</th>
                            </tr>
                            <tr>

                                <th>BM</th>
                                <th>BB</th>
                                <th>BSH</th>
                                <th>BSB</th>
                            </tr>

                            @foreach ($it as $bidang => $bd)
                                <tr>

                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $bd }}</td>
                                    <td>@if ($nilai[$bd] == 'BM') X @endif</td>
                                    <td>@if ($nilai[$bd] == 'BB') X @endif</td>
                                    <td>@if ($nilai[$bd] == 'BSH') X @endif</td>
                                    <td>@if ($nilai[$bd] == 'BSB') X @endif</td>

                                </tr>
                            @endforeach



                        </table>
                    </div>
                @endif
            @endforeach

        </div>
        <div class="page-break"></div>
        <div style="font-size: 14">
            <p style="text-align: center">LAPORAN PERKEMBANGAN MURID
            </p>
            <div style="height: 50px"></div>

            <table style="width: 100%" cellpadding=2px;>


                <tr>
                    <td>Nama </td>
                    <td>:</td>
                    <td>{{ $data['siswa']['nama'] }}</td>
                    <td style="text-align: right">Semester {{ $data['semester']}} </td>
                </tr>
            </table>
            @php
                $perkembangan = ['NILAI MORAL AGAMA', 'BAHASA', 'KOGNITIF', 'SOSIAL EMOSIONAL', 'FISIK MOTORIK', 'SENI'];

            @endphp

            <p> <strong> I. PERTUMBUHAN </strong> </p>
            <div style="margin-bottom: 50px">
                <table
                    style="width: 100%; margin-bottom: 8%; font-size: 16; border-collapse: collapse; border-style: solid; page-break-after: auto;"cellpadding="15px;"
                    border="1">

                    <tr>

                        <td rowspan="">
                            <table border="0" style="width: 100%; border-style: none">
                                <tr>
                                    <td style="width: 10%">BB</td>
                                    <td style="width: 1%">:</td>
                                    <td>{{ $nilai['bb'] }}</td>
                                </tr>
                                <tr>
                                    <td>TB</td>
                                    <td>:</td>
                                    <td>{{ $nilai['tb'] }}</td>
                                </tr>
                                <tr>
                                    <td>LK</td>
                                    <td>:</td>
                                    <td>{{ $nilai['lk'] }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </table>
            </div>
            <p> <strong> II. PERKEMBANGAN </strong> </p>
            @foreach ($perkembangan as $per => $kb)
                <div style="margin-bottom: 50px">
                    <table
                        style="width: 100%;  font-size: 14; border-collapse: collapse; border-style: solid; page-break-after: auto;"cellpadding="10px;"
                        border="1">

                        <tr>

                            <td rowspan="">
                                {{ $kb }}
                            </td>
                        </tr>
                        <tr>

                            <td rowspan="" style="height: 250px">
                                {{ $nilai[$kb] }}
                            </td>
                        </tr>

                    </table>
                </div>
            @endforeach
            @php
             $ekskuri = ['Berenang'];
            @endphp
            <div style="margin-bottom: 50px">
                <table
                    style="width: 100%;  font-size: 14; border-collapse: collapse; border-style: solid; page-break-after: auto;"cellpadding="10px;"
                    border="1">

                    <tr>

                        <th colspan="2">
                            EKSTRAKURIKULER
                        </th>
                    </tr>
                    <tr>

                        <td>Jenis Ekstrakurikuler</td>
                        <td>Nilai</td>

                    </tr>
                    @foreach($ekskuri as $eks => $x)
                    <tr>

                        <td>{{$x}}</td>
                        <td>{{$nilai[$x]}}</td>

                    </tr>
                    @endforeach

                </table>
            </div>
            <div style="margin-bottom: 150px">
                <table
                    style="width: 100%;  font-size: 14; border-collapse: collapse; border-style: solid; page-break-after: auto;"cellpadding="10px;"
                    border="1">

                    <tr>

                        <th colspan="">
                            KETIDAKHADIRAN
                        </th>
                        <th colspan="">
                            Hari
                        </th>
                    </tr>
                    <tr>

                        <td>Sakit</td>
                        <td>{{ $data['absen']['sakit'] }}</td>

                    </tr>
                    <tr>

                        <td>Izin</td>
                        <td>{{ $data['absen']['izin'] }}</td>

                    </tr>
                    <tr>

                        <td>Tanpa Keterangan</td>
                        <td>{{ $data['absen']['alpha'] }}</td>

                    </tr>

                </table>
            </div>
            <div class="page-break"></div>
            {{-- <div style="margin-bottom: 50px">
                <table
                    style="width: 100%;  font-size: 14; border-collapse: collapse; border-style: solid; page-break-after: auto;"cellpadding="10px;"
                    border="1">

                    <tr>

                        <th colspan="">
                            GURU
                        </th>
                        <th colspan="">
                            ORANG TUA
                        </th>
                    </tr>
                    <tr>

                        <td style="height: 150px; width: 50%"></td>
                        <td></td>

                    </tr>


                </table>
            </div> --}}
            <div style="margin-bottom: 0px">
                <table
                    style="width: 100%;  font-size: 14; border-collapse: collapse; border-style: solid; page-break-after: auto;"cellpadding="10px;"
                    border="0">

                    <tr>

                        <th colspan="">

                        </th>
                        <td align="right">
                            <p style="text-align: right">Rato, {{ setCustomDate() }}</p> 
                        </td>
                    </tr>
                    <tr>

                        <td align="center">
                            Wali Kelas Kelompok {{ strtoupper($data['siswa']['kelas_siswa']['kelas']['nama']) }}
                        </td>
                        <td align="center">
                            Orang Tua Murid
                        </td>
                    </tr>
                    <tr>

                        <td style="height: 200px; width: 50%; " align="center">
                             <br>
                            <u> {{ strtoupper($data['wali']['nama']) }}</u>
                        </td>
                        <td align="center"> <u>{{ strtoupper($data['siswa']['ayah']) }}</u> </td>

                    </tr>
                </table>
            </div>
            <div style="margin-bottom: 10px">
                <table
                    style="width: 100%;  font-size: 14; border-collapse: collapse; border-style: solid; page-break-after: auto;"cellpadding="10px;"
                    border="0">

                    <tr>
                        <td align="center">
                            Mengetahui
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            Kepala TK Islam Terpadu INSAN QUR’ANI MULIA
                        </td>
                    </tr>
                    <tr>

                        <td style=" " align="center">
                            <br> <p style="margin-top: 90px;"><u> {{ strtoupper($data['kepsek']['nama']) }} </u></p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>

</html>
