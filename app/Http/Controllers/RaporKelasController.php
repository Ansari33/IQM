<?php

namespace App\Http\Controllers;

use App\Models\AbsensiSiswa;
use Illuminate\Http\Request;

use App\Models\RaporKelas;
use App\Models\IndikatorKelas;
use App\Models\Kelas;
use App\Models\Pengaturan;
use App\Models\Siswa;
use App\Models\Ustadzah;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class RaporKelasController extends Controller
{
    //
    public function index(){
        
        $data = RaporKelas::with(['siswa.kelas_siswa.kelas'])->get();
        return view('rapor.kelas.index',compact('data'));
    }

    public function tambah(){
        //$rapor = RaporKelas::where()
        $indikator = IndikatorKelas::get(['id','nama']);
        $siswa = Siswa::get(['id','nama']);
        return view('rapor.kelas.tambah',compact('indikator','siswa'));
    }

    public function simpan(Request $request ){
       #return $request->all();
        $result = RaporKelas::create([
            'siswa_id' => $request->siswa,
            'semester' => $request->semester,
            'tahun_ajaran' => $request->tahun_ajaran,
            'nilai' => json_encode($request->nilai),
        ]);
       
        if ($result) {
            return redirect('/rapor/kelas')->with('berhasil','Ditambahkan!');
        }else{
            return redirect()->back()->with('Gagal','Gagal Ditambahkan!');
        }

    }
    public function edit($id){
        $indikator = IndikatorKelas::get(['id','nama']);
        $siswa = Siswa::get(['id','nama']);
        $data = RaporKelas::find($id);
        return view('rapor.kelas.edit',compact('indikator','siswa','data'));
    }

    public function update(Request $request ){
        #return $request->all();
        $result = RaporKelas::find($request->id);
        $result->siswa_id = $request->siswa;
        $result->semester= $request->semester;
        $result->tahun_ajaran= $request->tahun_ajaran;
        $result->nilai= json_encode($request->nilai);
        $result->save();

        if ($result) {
            return redirect('/rapor/kelas')->with('berhasil','Diupdate!');
        }else{
            return redirect('/rapor/kelas')->with('berhasil','Gagal Di!');
        }

    }

    public function hapus($id){
       
         $result = RaporKelas::find($id)->delete();

         if ($result) {
             return redirect('/rapor/kelas')->with('berhasil','Dihapus!');
         }else{
             return redirect()->back()->with('berhasil','Gagal Terhapus!');
         }
 
     }

     public function print($id){
       
        $data = RaporKelas::with(['siswa.kelas_siswa.kelas'])->find($id);
        $kelas = Kelas::find($data['siswa']['kelas_siswa']['kelas_id']);
        $wali = Ustadzah::find($kelas->wali_1_id);
        $data->wali = $wali;
        $idKepsek = Pengaturan::where('nama','kepala_sekolah')->first()->nilai;
        $kepsek = Ustadzah::find($idKepsek);
        $data->kepsek = $kepsek;
        $absen = [];
        $absen['alpha'] = AbsensiSiswa::where('siswa_id',$data['siswa_id'])->where('status',0)->count();
        $absen['sakit'] = AbsensiSiswa::where('siswa_id',$data['siswa_id'])->where('status',3)->count();
        $absen['izin'] = AbsensiSiswa::where('siswa_id',$data['siswa_id'])->where('status',2)->count();
        $data->absen = $absen;
        #return $data;
        #return json_decode($data['nilai']);
        if ($data) {
            $pdf = Pdf::loadView('rapor.rapor',['data' => $data])->setPaper('a4', 'potrait')->setWarnings(false);
             return $pdf->stream();
        }else{
            return redirect()->back()->with('berhasil','Gagal Terhapus!');
            
        }

    }
}
