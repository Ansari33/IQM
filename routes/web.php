<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\UstadzahController;
use App\Http\Controllers\JenisPemasukkanController;
use App\Http\Controllers\JenisPengeluaranController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\PemasukkanController;
use App\Http\Controllers\RpphController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KelasSiswaController;
use App\Http\Controllers\HafalanSiswaController;
use App\Http\Controllers\HafalanUstadzahController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\IndikatorKelasController;
use App\Http\Controllers\RaporKelasController;
use App\Http\Controllers\IndikatorTahfidzController;
use App\Http\Controllers\RaporTahfidzController;
use App\Http\Controllers\IndikatorIwrController;
use App\Http\Controllers\RaporIwrController;
use App\Http\Controllers\AbsensiSiswaController;
use App\Http\Controllers\AbsensiGuruController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HistoriUangController;
use App\Http\Controllers\IndikatorTasmiController;
use App\Http\Controllers\RaporTasmiController;

#use Session;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/absen', function(){
    return view('absen');
});
Route::get('/absen/qr', function(){
    return view('absensi.guru.absen');
});
Route::get('/absen/masuk/{id}', [AbsensiGuruController::class,'masuk']);
Route::prefix('login')->group(function () {
    Route::get('/', function () { 
        if (Session::get('auth')) {
            return redirect('/dashboard');
        }
        return view('login'); 
    });
    Route::post('/auth', [UserLoginController::class,'authLogin']);
    Route::get('/edit/{i}', [UserLoginController::class,'edit']);
    Route::post('/update', [UserLoginController::class,'update']);
    Route::get('/out', function () { 
        Session::flush();
        return redirect('/dashboard');
    });
});
Route::get('/', [BlogController::class,'index']);
Route::get('/blogs', [BlogController::class,'client']);
Route::get('/blogs/view/{j}', [BlogController::class,'view']);
Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class,'index']);
    Route::get('/tambah', [BlogController::class,'tambah']);
    Route::post('/simpan', [BlogController::class,'simpan']);
    Route::get('/edit/{i}', [BlogController::class,'edit']);
    Route::post('/update', [BlogController::class,'update']);
    Route::get('/hapus/{i}', [BlogController::class,'hapus']);
});
Route::get('/sample-rapor', function () { 
    $pdf = Pdf::loadView('rapor.rapor')->setPaper('a4', 'potrait')->setWarnings(false);
    return $pdf->stream();
});
Route::get('/cekangka/{a}', function ($b) {
    $sebutanAngka = [];
    $sebutanAngka = [
        '1' => ['se','satu'],
        '1' => ['se','satu'],
        '1' => 'Tiga',
        '1' => 'Empat',
        '1' => 'Lima',
        '1' => 'Enam',
        '1' => 'Tujuh',
        '1' => 'delapan',
        '9' => 'sembilan',
    ];
   
     
    return $b; 
});
Route::group(['middleware' => ['checklogin','checkakses']],function () {
    // Route::get('/dashboard', function () {
    //     return view('layout');
    // });
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class,'index']);
        Route::get('/tambah', [DashboardController::class,'tambah']);
        Route::post('/simpan', [DashboardController::class,'simpan']);
        Route::get('/edit/{i}', [DashboardController::class,'edit']);
        Route::post('/update', [DashboardController::class,'update']);
        Route::get('/hapus/{i}', [DashboardController::class,'hapus']);
    });
    
    Route::prefix('siswa')->group(function () {
        Route::get('/', [SiswaController::class,'index']);
        Route::get('/tingkat/{t}', [SiswaController::class,'indexTingkat']);
        Route::get('/tambah', [SiswaController::class,'tambah']);
        Route::post('/simpan', [SiswaController::class,'simpan']);
        Route::get('/edit/{i}', [SiswaController::class,'edit']);
        Route::post('/update', [SiswaController::class,'update']);
        Route::get('/hapus/{i}', [SiswaController::class,'hapus']);
        Route::get('/export', [SiswaController::class,'export']);
        Route::get('/upload', [SiswaController::class,'upload']);
        Route::post('/upload', [SiswaController::class,'simpanUpload']);
    });
    
    Route::prefix('kelas')->group(function () {
        Route::get('/', [KelasController::class,'index']);
        Route::get('/tambah', [KelasController::class,'tambah']);
        Route::post('/simpan', [KelasController::class,'simpan']);
        Route::get('/edit/{i}', [KelasController::class,'edit']);
        Route::post('/update', [KelasController::class,'update']);
        Route::get('/hapus/{i}', [KelasController::class,'hapus']);
    });
    
    Route::prefix('kelas-siswa')->group(function () {
        Route::get('/{i}', [KelasSiswaController::class,'index']);
        Route::get('/tambah/{i}', [KelasSiswaController::class,'tambah']);
        Route::post('/simpan', [KelasSiswaController::class,'simpan']);
        Route::get('/edit/{i}', [KelasSiswaController::class,'edit']);
        Route::post('/update', [KelasSiswaController::class,'update']);
        Route::get('/hapus/{i}', [KelasSiswaController::class,'hapus']);
        Route::get('/absen/{i}', [KelasSiswaController::class,'absen']);
        Route::get('/absensi/harian/{i}', [KelasSiswaController::class,'absenHarian']);
    });
    Route::prefix('halaqoh')->group(function () {
        Route::get('/', function () {
            return view('halaqoh.index');
        });
        Route::get('/tambah/{i}', [KelasSiswaController::class,'tambah']);
        Route::post('/simpan', [KelasSiswaController::class,'simpan']);
        Route::get('/edit/{i}', [KelasSiswaController::class,'edit']);
        Route::post('/update', [KelasSiswaController::class,'update']);
        Route::get('/hapus/{i}', [KelasSiswaController::class,'hapus']);
    });
    Route::prefix('rapor')->group(function () {
        Route::get('/', function () {
            return view('rapor.index');
        });
        Route::get('/tambah/{i}', [KelasSiswaController::class,'tambah']);
        Route::post('/simpan', [KelasSiswaController::class,'simpan']);
        Route::get('/edit/{i}', [KelasSiswaController::class,'edit']);
        Route::post('/update', [KelasSiswaController::class,'update']);
        Route::get('/hapus/{i}', [KelasSiswaController::class,'hapus']);

        Route::prefix('indikator-kelas')->group(function () {
            Route::get('/',[IndikatorKelasController::class,'index'] );
            Route::get('/tambah', [IndikatorKelasController::class,'tambah']);
            Route::post('/simpan', [IndikatorKelasController::class,'simpan']);
            Route::get('/edit/{i}', [IndikatorKelasController::class,'edit']);
            Route::post('/update', [IndikatorKelasController::class,'update']);
            Route::get('/hapus/{i}', [IndikatorKelasController::class,'hapus']);
        });
        Route::prefix('kelas')->group(function () {
            Route::get('/',[RaporKelasController::class,'index'] );
            Route::get('/tambah', [RaporKelasController::class,'tambah']);
            Route::post('/simpan', [RaporKelasController::class,'simpan']);
            Route::get('/edit/{i}', [RaporKelasController::class,'edit']);
            Route::post('/update', [RaporKelasController::class,'update']);
            Route::get('/hapus/{i}', [RaporKelasController::class,'hapus']);
            Route::get('/print/{i}', [RaporKelasController::class,'print']);
        });
        Route::prefix('indikator-tahfidz')->group(function () {
            Route::get('/',[IndikatorTahfidzController::class,'index'] );
            Route::get('/tambah', [IndikatorTahfidzController::class,'tambah']);
            Route::post('/simpan', [IndikatorTahfidzController::class,'simpan']);
            Route::get('/edit/{i}', [IndikatorTahfidzController::class,'edit']);
            Route::post('/update', [IndikatorTahfidzController::class,'update']);
            Route::get('/hapus/{i}', [IndikatorTahfidzController::class,'hapus']);
        });
        Route::prefix('tahfidz')->group(function () {
            Route::get('/',[RaporTahfidzController::class,'index'] );
            Route::get('/tambah', [RaporTahfidzController::class,'tambah']);
            Route::post('/simpan', [RaporTahfidzController::class,'simpan']);
            Route::get('/edit/{i}', [RaporTahfidzController::class,'edit']);
            Route::post('/update', [RaporTahfidzController::class,'update']);
            Route::get('/hapus/{i}', [RaporTahfidzController::class,'hapus']);
        });

        Route::prefix('indikator-iwr')->group(function () {
            Route::get('/',[IndikatorIwrController::class,'index'] );
            Route::get('/tambah', [IndikatorIwrController::class,'tambah']);
            Route::post('/simpan', [IndikatorIwrController::class,'simpan']);
            Route::get('/edit/{i}', [IndikatorIwrController::class,'edit']);
            Route::post('/update', [IndikatorIwrController::class,'update']);
            Route::get('/hapus/{i}', [IndikatorIwrController::class,'hapus']);
        });
        Route::prefix('iwr')->group(function () {
            Route::get('/',[RaporIwrController::class,'index'] );
            Route::get('/tambah', [RaporIwrController::class,'tambah']);
            Route::post('/simpan', [RaporIwrController::class,'simpan']);
            Route::get('/edit/{i}', [RaporIwrController::class,'edit']);
            Route::post('/update', [RaporIwrController::class,'update']);
            Route::get('/hapus/{i}', [RaporIwrController::class,'hapus']);
        });
    });
    Route::prefix('tasmi')->group(function () {
        Route::get('/', [RaporTasmiController::class,'index']);
        Route::get('/tambah', [RaporTasmiController::class,'tambah']);
        Route::post('/simpan', [RaporTasmiController::class,'simpan']);
        Route::get('/edit/{i}', [RaporTasmiController::class,'edit']);
        Route::post('/update', [RaporTasmiController::class,'update']);
        Route::get('/hapus/{i}', [RaporTasmiController::class,'hapus']);
        Route::get('/pdf/{i}', [RaporTasmiController::class,'persiswa']);
        Route::prefix('indikator')->group(function () {
            Route::get('/', [IndikatorTasmiController::class,'index']);
            Route::get('/tambah', [IndikatorTasmiController::class,'tambah']);
            Route::post('/simpan', [IndikatorTasmiController::class,'simpan']);
            Route::get('/edit/{i}', [IndikatorTasmiController::class,'edit']);
            Route::post('/update', [IndikatorTasmiController::class,'update']);
            Route::get('/hapus/{i}', [IndikatorTasmiController::class,'hapus']);
        });
    });

    Route::prefix('absensi')->group(function () {
        Route::get('/', function () {
            return view('rapor.index');
        });
        Route::get('/tambah/{i}', [KelasSiswaController::class,'tambah']);
        Route::post('/simpan', [KelasSiswaController::class,'simpan']);
        Route::get('/edit/{i}', [KelasSiswaController::class,'edit']);
        Route::post('/update', [KelasSiswaController::class,'update']);
        Route::get('/hapus/{i}', [KelasSiswaController::class,'hapus']);

        Route::prefix('siswa')->group(function () {
            Route::get('/',[AbsensiSiswaController::class,'index'] );
            Route::get('/harian',[AbsensiSiswaController::class,'harian'] );
            Route::post('/update-harian',[AbsensiSiswaController::class,'updateHarian'] );
            Route::get('/tambah', [AbsensiSiswaController::class,'tambah']);
            Route::post('/simpan', [AbsensiSiswaController::class,'simpan']);
            Route::get('/edit/{i}', [AbsensiSiswaController::class,'edit']);
            Route::post('/update', [AbsensiSiswaController::class,'update']);
            Route::get('/hapus/{i}', [AbsensiSiswaController::class,'hapus']);
        });
        Route::prefix('guru')->group(function () {
            Route::get('/',[AbsensiGuruController::class,'index'] );
            Route::get('/harian',[AbsensiGuruController::class,'harian'] );
            Route::post('/update-harian',[AbsensiGuruController::class,'updateHarian'] );
            Route::get('/tambah', [AbsensiGuruController::class,'tambah']);
            Route::post('/simpan', [AbsensiGuruController::class,'simpan']);
            Route::get('/edit/{i}', [AbsensiGuruController::class,'edit']);
            Route::post('/update', [AbsensiGuruController::class,'update']);
            Route::get('/hapus/{i}', [AbsensiGuruController::class,'hapus']);
        });
    });
    
    Route::prefix('hafalan-siswa')->group(function () {
        Route::get('/', [HafalanSiswaController::class,'index']);
        Route::get('/tambah', [HafalanSiswaController::class,'tambah']);
        Route::post('/simpan', [HafalanSiswaController::class,'simpan']);
        Route::get('/edit/{i}', [HafalanSiswaController::class,'edit']);
        Route::post('/update', [HafalanSiswaController::class,'update']);
        Route::get('/hapus/{i}', [HafalanSiswaController::class,'hapus']);
    });

    Route::prefix('alumni')->group(function () {
        Route::get('/', [AlumniController::class,'index']);
        Route::get('/tambah', [AlumniController::class,'tambah']);
        Route::post('/simpan', [AlumniController::class,'simpan']);
        Route::get('/edit/{i}', [AlumniController::class,'edit']);
        Route::post('/update', [AlumniController::class,'update']);
        Route::get('/hapus/{i}', [AlumniController::class,'hapus']);
        Route::get('/sebaran', [AlumniController::class,'sebaran']);
    });
    
    Route::prefix('hafalan-ustadzah')->group(function () {
        Route::get('/', [HafalanUstadzahController::class,'index']);
        Route::get('/tambah', [HafalanUstadzahController::class,'tambah']);
        Route::post('/simpan', [HafalanUstadzahController::class,'simpan']);
        Route::get('/edit/{i}', [HafalanUstadzahController::class,'edit']);
        Route::post('/update', [HafalanUstadzahController::class,'update']);
        Route::get('/hapus/{i}', [HafalanUstadzahController::class,'hapus']);
    });
    
    Route::prefix('ustadzah')->group(function () {
        Route::get('/', [UstadzahController::class,'index']);
        Route::get('/tambah', [UstadzahController::class,'tambah']);
        Route::post('/simpan', [UstadzahController::class,'simpan']);
        Route::get('/edit/{i}', [UstadzahController::class,'edit']);
        Route::post('/update', [UstadzahController::class,'update']);
        Route::get('/hapus/{i}', [UstadzahController::class,'hapus']);
        Route::get('/upload', [UstadzahController::class,'upload']);
        Route::post('/upload', [UstadzahController::class,'simpanUpload']);
        Route::get('/export', [UstadzahController::class,'export']);
        Route::get('/card/{i}', [UstadzahController::class,'card']);
    });
    
    Route::prefix('spp')->group(function () {
        Route::get('/', [SppController::class,'index']);
        Route::get('/tambah', [SppController::class,'tambah']);
        Route::post('/simpan', [SppController::class,'simpan']);
        Route::get('/edit/{i}', [SppController::class,'edit']);
        Route::post('/update', [SppController::class,'update']);
        Route::get('/hapus/{i}', [SppController::class,'hapus']);
        Route::get('/export/{f}/{v}', [SppController::class,'exportExcel']);
        Route::get('/exportall', [SppController::class,'exportExcelAll']);
    });
    
    Route::prefix('pemasukkan')->group(function () {
        Route::get('/', [PemasukkanController::class,'index']);
        Route::get('/tambah', [PemasukkanController::class,'tambah']);
        Route::post('/simpan', [PemasukkanController::class,'simpan']);
        Route::get('/edit/{i}', [PemasukkanController::class,'edit']);
        Route::post('/update', [PemasukkanController::class,'update']);
        Route::get('/hapus/{i}', [PemasukkanController::class,'hapus']);
        Route::get('/export', [PemasukkanController::class,'exportAll']);
        Route::get('/export/{a}/{z}', [PemasukkanController::class,'export']);
    });
    
    Route::prefix('pengeluaran')->group(function () {
        Route::get('/', [PengeluaranController::class,'index']);
        Route::get('/tambah', [PengeluaranController::class,'tambah']);
        Route::post('/simpan', [PengeluaranController::class,'simpan']);
        Route::get('/edit/{i}', [PengeluaranController::class,'edit']);
        Route::post('/update', [PengeluaranController::class,'update']);
        Route::get('/hapus/{i}', [PengeluaranController::class,'hapus']);
        Route::get('/export', [PengeluaranController::class,'exportAll']);
        Route::get('/export/{a}/{z}', [PengeluaranController::class,'export']);
    });

    Route::prefix('histori-uang')->group(function () {
        Route::get('/', [HistoriUangController::class,'index']);
        Route::get('/tambah', [HistoriUangController::class,'tambah']);
        Route::post('/simpan', [HistoriUangController::class,'simpan']);
        Route::get('/edit/{i}', [HistoriUangController::class,'edit']);
        Route::post('/update', [HistoriUangController::class,'update']);
        Route::get('/hapus/{i}', [HistoriUangController::class,'hapus']);
        Route::get('/export', [HistoriUangController::class,'exportAll']);
        Route::get('/export/{a}/{z}', [HistoriUangController::class,'export']);
    });

    Route::prefix('rpph')->group(function () {
        Route::get('/', [RpphController::class,'index']);
        Route::get('/tambah', [RpphController::class,'tambah']);
        Route::post('/simpan', [RpphController::class,'simpan']);
        Route::get('/edit/{i}', [RpphController::class,'edit']);
        Route::post('/update', [RpphController::class,'update']);
        Route::get('/hapus/{i}', [RpphController::class,'hapus']);
    });

    Route::prefix('dokumen')->group(function () {
        Route::get('/', [DokumenController::class,'index']);
        Route::get('/tambah', [DokumenController::class,'tambah']);
        Route::post('/simpan', [DokumenController::class,'simpan']);
        Route::get('/edit/{i}', [DokumenController::class,'edit']);
        Route::post('/update', [DokumenController::class,'update']);
        Route::get('/hapus/{i}', [DokumenController::class,'hapus']);
    });

    Route::prefix('user-menu')->group(function () {
        Route::get('/', [UserLoginController::class,'index']);
        Route::get('/tambah', [UserLoginController::class,'tambah']);
        Route::post('/simpan', [UserLoginController::class,'simpan']);
        Route::get('/edit/{i}', [UserLoginController::class,'edit']);
        Route::post('/update', [UserLoginController::class,'update']);
        Route::get('/hapus/{i}', [UserLoginController::class,'hapus']);
        Route::get('/akses/{i}', [UserLoginController::class,'editAkses']);
        Route::post('/update-akses', [UserLoginController::class,'updateAkses']);
    });

    Route::prefix('pengaturan')->group(function () {
        Route::get('/', [PengaturanController::class,'index']);
        Route::get('/tambah', [PengaturanController::class,'tambah']);
        Route::post('/simpan', [PengaturanController::class,'simpan']);
        Route::get('/edit/{i}', [PengaturanController::class,'edit']);
        Route::post('/update', [PengaturanController::class,'update']);
        Route::get('/hapus/{i}', [PengaturanController::class,'hapus']);
    });

    Route::prefix('blog')->group(function () {
        Route::get('/', [BlogController::class,'index']);
        Route::get('/tambah', [BlogController::class,'tambah']);
        Route::post('/simpan', [BlogController::class,'simpan']);
        Route::get('/edit/{i}', [BlogController::class,'edit']);
        Route::post('/update', [BlogController::class,'update']);
        Route::get('/hapus/{i}', [BlogController::class,'hapus']);
    });
    
    
    Route::prefix('laporan')->group(function () {
        Route::get('/', [LaporanController::class,'index']);
        // Route::get('/tambah', [PenjualanController::class,'tambah']);
        // Route::post('/simpan', [PenjualanController::class,'simpan']);
        // Route::get('/edit/{i}', [PenjualanController::class,'edit']);
        // Route::post('/update', [PenjualanController::class,'update']);
        // Route::get('/hapus/{i}', [PenjualanController::class,'hapus']);
    });
});






