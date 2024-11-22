<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RaporTasmi;
use App\Models\IndikatorTasmi;
use App\Models\Siswa;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class RaporTasmiController extends Controller
{
    //
    public function index(){
        
        $data = RaporTasmi::with([])->get();
        $siswa = Siswa::get(['id','nama']);
        return view('hafalan-siswa.tasmi.index',compact('data','siswa'));
    }

    public function tambah(){
        $indikator = IndikatorTasmi::get();
        $siswa = Siswa::get(['id','nama']);
        return view('hafalan-siswa.tasmi.tambah',compact('indikator','siswa'));
    }

    public function simpan(Request $request ){
       #return $request->all();
       $nilai = [];
       foreach($request->indikator as $reqi => $ind){
        $nilai[$ind] = [
            
            'keterangan' => $request->ket[$ind],
            'nilai'=> $request->nilai[$reqi]
        ];

       }
       #return $nilai;
        $result = false;
        #foreach ($request->nilai as $key => $value) {
            $result = RaporTasmi::create([
                'siswa_id' => $request->siswa,
                'surah' => $request->surah,
                'tanggal' => Carbon::createFromFormat('m/d/Y', $request->tanggal)->toDateString(),
                'nilai' => json_encode($nilai)
            ]);
        #}
        if ($result) {
            return redirect('/tasmi')->with('berhasil','Ditambahkan!');
        }else{
            return redirect()->back()->with('Gagal','Gagal Ditambahkan!');
        }

    }
    public function edit($id){
        $data = RaporTasmi::find($id);
        $indikator = IndikatorTasmi::get();
        $siswa = Siswa::get(['id','nama']);
        return view('hafalan-siswa.tasmi.edit',compact('data','indikator','siswa'));
    }

    public function update(Request $request ){
       
        
        $result = RaporTasmi::find($request->id);
       # return $request->all();
        if ($result) {
            
            $nilai = [];
            foreach($request->indikator as $reqi => $ind){
                $nilai[$ind] = [
                    
                    'keterangan' => $request->ket[$ind],
                    'nilai'=> $request->nilai[$reqi]
                ]; 
            }
            #return $result;
            $result->siswa_id = $request->siswa;
            $result->surah = $request->surah;
            $result->tanggal = Carbon::createFromFormat('m/d/Y', $request->tanggal)->toDateString();
            $result->nilai = json_encode($nilai);
            $result->save();
            
            return redirect('/tasmi')->with('berhasil','Diupdate!');
        }else{
            return redirect('/tasmi')->with('gagal','Gagal!');
        }

    }

    public function hapus($id){
       
         $result = RaporTasmi::find($id)->delete();

         if ($result) {
             return redirect('/tasmi')->with('berhasil','Dihapus!');
         }else{
             return redirect()->back()->with('berhasil','Gagal Terhapus!');
         }
 
     }

     public function persiswa($id){
        $siswa = Siswa::find($id);
        $nilai = RaporTasmi::where('siswa_id',$id)->get();
        $indikator = IndikatorTasmi::get(['nama']);
        $data = [
            'siswa' => $siswa,
            'nilai' => $nilai,
            'indikator' => $indikator,
        ];
        $pdf = Pdf::loadView('hafalan-siswa.tasmi.laporan-siswa',['data' => $data])->setPaper('a4', 'potrait')->setWarnings(false);
        return $pdf->stream();
        // if ($result) {
        //     return redirect('/tasmi')->with('berhasil','Dihapus!');
        // }else{
        //     return redirect()->back()->with('berhasil','Gagal Terhapus!');
        // }

    }
}
