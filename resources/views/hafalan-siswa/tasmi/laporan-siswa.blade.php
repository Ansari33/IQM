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
        '1' => 'Januari',
        '2' => 'Februari',
        '3' => 'Maret',
        '4' => 'April',
        '5' => 'Mei',
        '6' => 'Juni',
        '7' => 'Juli',
        '8' => 'Agustus',
        '9' => 'September',
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
        <u><strong>  <p style="text-align: center; text-decoration: underline"> Nilai Tasmi' SIT INSAN QUR’ANI MULIA BIMA </p>  </strong></u>
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
            


        </div>
    </footer>

    <main>

        
        
       
        <div style="padding: 10px; font-size: 14">
            

            <table style="width: 40%" cellpadding=2px;>

                <tr>
                    <td>Nama Anak Didik</td>
                    <td>:</td>
                    <td>{{ $data['siswa']['nama'] }}</td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>Juz</td>
                    <td>:</td>
                    <td>30</td>
                </tr> 
            </table>
            <table style="width: 100%" border="1" style="border-collapse: collapse; width: 100%; font-size: 12">

                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Surah</th>
                    @foreach($data['indikator'] as $ind => $i)
                    <th>{{ $i['nama']}}</th>
                    @endforeach
                    <th>Keterangan</th>

                    
                </tr>
                @php
                 $rata = [];
                @endphp
                @foreach ($data['nilai'] as $item => $n)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ \Carbon\Carbon::parse($n['tanggal'])->format('d-m-Y')}}</td>
                    <td>{{$n['surah']}}</td>
                    @php
                    $nilai = json_decode($n['nilai'],true);
                    @endphp
                    @foreach($data['indikator'] as $ind => $i)
                    <td>
                        @if(isset($nilai[$i['nama']]))
                            @php
                            $rata[$i['nama']][]  =$nilai[$i['nama']]['nilai'];
                            @endphp
                            {{$nilai[$i['nama']]['nilai']}}
                        @else
                            @php
                            $rata[$i['nama']][] = 0;
                            @endphp
                            0
                        @endif
                    </td>
                    @endforeach
                    <td></td>
                </tr>
                @endforeach
                <tr>
                    
                    <th colspan="3"> Rata-Rata</th>
                    
                    @foreach($data['indikator'] as $ind => $i)
                    <td>
                       {{ array_sum( $rata[$i['nama']])/count($data['nilai']) }}
                    </td>
                    @endforeach
                    <td></td>
                    
                    
                </tr>
                
            </table>
        </div>
        
    </main>
</body>

</html>
