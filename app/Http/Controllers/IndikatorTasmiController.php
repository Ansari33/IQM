<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\IndikatorTasmi;
use App\Models\Ustadzah;
use Carbon\Carbon;

class IndikatorTasmiController extends Controller
{
    //
    public function index(){
        
        $data = IndikatorTasmi::with([])->get();
        return view('hafalan-siswa.indikator.index',compact('data'));
    }

    public function tambah(){
        return view('hafalan-siswa.indikator.tambah');
    }

    public function simpan(Request $request ){
        $child = [];
       for ($i = 0; $i< count($request->ket); $i++) {
        $child[] = [
            'keterangan' => $request->ket[$i],
             'awal'      => $request->awal[$i],
             'akhir'     => $request->akhir[$i]
            ];
       }
        $result = IndikatorTasmi::create([
   
            'nama' => $request->nama,
            'urutan' => $request->urutan,
            'child' => json_encode($child)
        ]);

        

        if ($result) {
            return redirect('/tasmi/indikator')->with('berhasil','Ditambahkan!');
        }else{
            return redirect()->back()->with('Gagal','Gagal Ditambahkan!');
        }

    }
    public function edit($id){
        $data = IndikatorTasmi::find($id);
        return view('hafalan-siswa.indikator.edit',compact('data'));
    }

    public function update(Request $request ){
        $child = [];
       for ($i = 0; $i< count($request->ket); $i++) {
        $child[] = [
            'keterangan' => $request->ket[$i],
             'awal'      => $request->awal[$i],
             'akhir'     => $request->akhir[$i]
            ];
       }
       $result = IndikatorTasmi::find($request->id);
       $result->nama = $request->nama;
       $result->urutan = $request->urutan;
       $result->child = json_encode($child);
       $result->save();


        if ($result) {
            return redirect('/tasmi/indikator')->with('berhasil','Diupdate!');
        }else{
            return redirect()->back()->with('berhasil','Gagal Di!');
        }

    }

    public function hapus($id){
       
         $result = IndikatorTasmi::find($id)->delete();

         if ($result) {
             return redirect('/rapor/indikator-tahfidz')->with('berhasil','Dihapus!');
         }else{
             return redirect()->back()->with('berhasil','Gagal Terhapus!');
         }
 
     }
}
