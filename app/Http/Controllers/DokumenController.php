<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Dokumen;
use App\Models\Siswa;
use Carbon\Carbon;
use DB;

class DokumenController extends Controller
{
    //
    public function index(){
        
        $data = Dokumen::with(['pemilik'])->get();
        return view('dokumen.index',compact('data'));
    }

    public function tambah(){
        $siswa = Siswa::get(['nama','id']);
        return view('dokumen.tambah',compact('siswa'));
    }

    public function simpan(Request $request ){
        DB::beginTransaction();
        $result = Dokumen::create([
            'siswa_id' => $request->pemilik,
            'jenis' => $request->jenis,
            'nama' => $request->nama,
        ]);

        if ($result) {
            if(isset($request->dokumen)){
                $extAcc = ['doc','docx','DOC','DOCX','pdf','PDF','JPG','jpg','PNG','png','JPEG','jpeg'];
                $dok = $request->file('dokumen');
                if (!in_array($dok->getClientOriginalExtension(),$extAcc)) {
                    DB::rollBack();
                    return redirect()->back()->with('gagal','Tipe Berkas Tidak Diperbolehkan!');
                }
                $dok->move('file-dokumen/','dokumen-'.$result->id.'.'.$dok->getClientOriginalExtension());
                $result->file = 'dokumen-'.$result->id.'.'.$dok->getClientOriginalExtension();
                $result->save();
            }
            DB::commit();
            return redirect('/dokumen')->with('berhasil','Ditambahkan!');
        }else{
            return redirect()->back()->with('berhasil','Berhasil!');
        }

    }
    public function edit($id){
        $siswa = Siswa::get(['nama','id']);
        $data = Dokumen::find($id);
        return view('dokumen.edit',compact('siswa','data'));
    }

    public function update(Request $request ){
        DB::beginTransaction();
        $namaDokumen = $request->nama_dokumen;
        $result = Dokumen::find($request->id);
        if(isset($request->dokumen)){
            $extAcc = ['doc','docx','DOC','DOCX','pdf','PDF','JPG','jpg','PNG','png','JPEG','jpeg'];
            $dok = $request->file('dokumen');
            if (!in_array($dok->getClientOriginalExtension(),$extAcc)) {
                DB::rollBack();
                return redirect()->back()->with('gagal','Tipe Berkas Tidak Diperbolehkan!');
            }
            $dok->move('file-dokumen/','dokumen-'.$result->id.'.'.$dok->getClientOriginalExtension());
            $namaDokumen = 'dokumen-'.$result->id.'.'.$dok->getClientOriginalExtension();
        }
       
       $result->nama = $request->nama;
       $result->siswa_id = $request->pemilik;
       $result->jenis = $request->jenis;
       $result->file = $namaDokumen;
       $result->save();
        if ($result) {
            DB::commit();
            return redirect('/dokumen')->with('berhasil','Diupdate!');
        }else{
            DB::rollBack();
            return redirect()->back()->with('berhasil','Berhasil!');
        }

    }

    public function hapus($id){
         $result = Dokumen::find($id)->delete();

         if ($result) {
             return redirect('/rpph')->with('berhasil','Dihapus!');
         }else{
             return redirect()->back()->with('berhasil','Berhasil!');
         }
 
     }
}
