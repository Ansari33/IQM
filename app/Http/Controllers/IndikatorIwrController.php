<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\IndikatorIwr;
use App\Models\Ustadzah;
use Carbon\Carbon;

class IndikatorIwrController extends Controller
{
    //
    public function index(){
        
        $data = IndikatorIwr::with([])->get();
        return view('rapor.indikator-iwr.index',compact('data'));
    }

    public function tambah(){
        return view('rapor.indikator-iwr.tambah');
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
        $result = IndikatorIwr::create([
   
            'nama' => $request->nama,
            'urutan' => $request->urutan,
            'child' => json_encode($child)
        ]);

        

        if ($result) {
            return redirect('/rapor/indikator-iwr')->with('berhasil','Ditambahkan!');
        }else{
            return redirect()->back()->with('Gagal','Gagal Ditambahkan!');
        }

    }
    public function edit($id){
        $data = IndikatorIwr::find($id);
        return view('rapor.indikator-iwr.edit',compact('data'));
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
       $result = IndikatorIwr::find($request->id);
       $result->nama = $request->nama;
       $result->urutan = $request->urutan;
       $result->child = json_encode($child);
       $result->save();


        if ($result) {
            return redirect('/rapor/indikator-iwr')->with('berhasil','Diupdate!');
        }else{
            return redirect()->back()->with('berhasil','Gagal Di!');
        }

    }

    public function hapus($id){
       
         $result = IndikatorIwr::find($id)->delete();

         if ($result) {
             return redirect('/rapor/indikator-tahfidz')->with('berhasil','Dihapus!');
         }else{
             return redirect()->back()->with('berhasil','Gagal Terhapus!');
         }
 
     }
}
