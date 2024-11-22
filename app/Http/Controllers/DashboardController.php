<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Siswa;
use App\Models\Ustadzah;
use App\Models\Kelas;
use App\Models\KelasSiswa;
use App\Models\Pemasukkan;
use App\Models\Pengeluaran;
use App\Models\Pengaturan;
use Carbon\Carbon;

class DashboardController extends Controller
{
    //
    public function index(){
        
        $data = [
           'siswa' => Siswa::count(),
           'guru' => Ustadzah::count(),
           'kelas' => Kelas::count(),
           'pengeluaran' => Pengeluaran::sum('nominal'),
           'pemasukkan' => Pemasukkan::sum('nominal'),
        ];
        $pengaturan = collect(Pengaturan::get())->pluck('nilai','nama')->toArray();
        $kelas = Kelas::where('tahun_ajaran',$pengaturan['ta_aktif'])->get(['id','nama']);
        $dataKelas = [];
        foreach ($kelas as $key => $value) {
            #return $value;
            $dataKelas[] = [
                'label' => $value->nama,
                'data' => count(KelasSiswa::where('kelas_id',$value['id'])
                
                ->get(['siswa_id'])) 
            ]; 
            //count(KelasSiswa::where('kelas_id',$value['id'])->get(['siswa_id']));
        }
        $tahun_ajaran = Siswa::distinct('tahun_ajaran')->orderBy('tahun_masuk','desc')->limit(10)->get(['tahun_masuk'])->toArray();
        $dataSiswaMasuk[] = [0,0];
        foreach (array_reverse($tahun_ajaran) as $key => $value) {
            #return $value;
            $dataSiswaMasuk[] = [
                $value['tahun_masuk'],
                count(Siswa::where('tahun_masuk',$value['tahun_masuk'])
                //->where('tahun_ajaran')
                ->get(['id'])) 
            ]; 
            //count(KelasSiswa::where('kelas_id',$value['id'])->get(['siswa_id']));
        }
        $data['kelas siswa'] = $dataKelas;
        $data['perkembangan siswa'] = $dataSiswaMasuk;
       #return $data;
        return view('layout',compact('data'));
    }

    public function harian(){
        
        $guru = Ustadzah::with([])->get(['id','nama']);
        return view('absensi.guru.harian',compact('guru'));
    }

    public function updateHarian(Request $request){
        #return $request->all();
       $result = false;
        foreach ($request->absensi as $key => $value) {
            $result = AbsensiGuru::create([
                'ustadzah_id' => $key,
                'status' => $value,
                'tanggal' => date("Y-m-d"),
                'jam' => $request->jam[$key],
            ]);
        }
        if ($result) {
            #$redi = '/absensi.guru'.'/'.$request->id.'/';
            return redirect('/absensi/guru/harian')->with('berhasil','Ditambahkan Harian !');
        }else{
            return redirect()->back()->with('Gagal','Gagal Ditambahkan!');
        }
    }

    public function tambah($id){
         $termasuk = collect(AbsensiGuru::where('kelas_id',$id)->get(['siswa_id']))->pluck('siswa_id')->toArray();
         $siswa =Siswa::whereNotIn('id',$termasuk)->get(['id','nama']);
         $kelas =Kelas::get(['id','nama','tahun']);
        return view('absensi.guru.tambah',compact('siswa','kelas','id'));
    }

    public function simpan(Request $request ){
       
        $result = AbsensiGuru::create([
            'siswa_id' => $request->siswa,
            'kelas_id' => $request->kelas,
            'keterangan' => $request->keterangan,
        ]);

        if ($result) {
            #$redi = '/absensi.guru'.'/'.$request->id.'/';
            return redirect('/kelas')->with('berhasil','Ditambahkan Siswa !');
        }else{
            return redirect()->back()->with('Gagal','Gagal Ditambahkan!');
        }

    }
    public function edit($id){
        $data = AbsensiGuru::with(['siswa'])->find($id);
        $termasuk = collect(AbsensiGuru::where('kelas_id',$data->kelas_id)->get(['siswa_id']))->pluck('siswa_id')->toArray();
        $siswa = Siswa::whereNotIn('id',$termasuk)->get(['id','nama']);
        $kelas = Kelas::get(['id','nama','tahun']);
        
        return view('absensi.guru.edit',compact('siswa','kelas','data'));
    }

    public function update(Request $request ){
        
       $result = AbsensiGuru::find($request->id);
       $result->siswa_id = $request->siswa;
       $result->kelas_id = $request->kelas;
       $result->keterangan = $request->keterangan;
       $result->save();


        if ($result) {

            return redirect('/kelas')->with('berhasil','Diupdate Siswa!');
        }else{
            return redirect()->back()->with('berhasil','Gagal Diupdate!');
        }

    }

    public function hapus($id){
       
         $result = AbsensiGuru::find($id)->delete();

         if ($result) {
             return redirect('/kelas')->with('berhasil','Dihapus Siswa!');
         }else{
             return redirect()->back()->with('berhasil','Gagal Terhapus!');
         }
 
     }
}
