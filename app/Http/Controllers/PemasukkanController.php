<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Pemasukkan;
use App\Models\Pengaturan;
use Carbon\Carbon;
use Excel;

class PemasukkanController extends Controller
{
    //
    public function index(){
        
        $data = Pemasukkan::get();
        $rangkuman= [];
        $ta = Pengaturan::where('nama','ta_aktif')->first()->nilai;
        $rangkuman['bulan'] = Pemasukkan::whereMonth('tanggal',date("m"))
        ->where('tahun_ajaran',$ta)
        ->sum('nominal');
        
        $rangkuman['ta'] = Pemasukkan::where('tahun_ajaran',
        $ta
        )->sum('nominal');
        $rangkuman['semua'] = Pemasukkan::sum('nominal');
        return view('pemasukkan.index',compact('data','rangkuman'));
    }

    public function tambah(){
        $stok = [];
        return view('pemasukkan.tambah',compact('stok'));
    }

    public function simpan(Request $request ){
        #return $request->all();
        $result = Pemasukkan::create([
            'tanggal' => Carbon::createFromFormat('m/d/Y', $request->tanggal)->toDateString() ,
            'nama' => $request->nama,
            'nominal' => $request->nominal,
            'tahun_ajaran' => $request->tahun_ajaran,
            // 'total' => $request->total,
            'keterangan' => $request->keterangan,
        ]);

        if ($result) {
            return redirect('/pemasukkan')->with('berhasil','Ditambahkan!');
        }else{
            return redirect()->back()->with('berhasil','Berhasil!');
        }

    }
    public function edit($id){
        $stok = [];
        $data = Pemasukkan::find($id);
        return view('pemasukkan.edit',compact('stok','data'));
    }

    public function update(Request $request ){
       // return $request->nama;
       $result = Pemasukkan::find($request->id);
       
       $result->tanggal = Carbon::createFromFormat('m/d/Y', $request->tanggal)->toDateString();
       $result->nama = $request->nama;
       $result->nominal = $request->nominal;
       $result->tahun_ajaran = $request->tahun_ajaran;
       $result->keterangan = $request->keterangan;
       $result->save();

        if ($result) {
            return redirect('/pemasukkan')->with('berhasil','Diupdate!');
        }else{
            return redirect()->back()->with('berhasil','Berhasil!');
        }

    }

    public function hapus($id){
        // return $request->nama;
         $result = Pemasukkan::find($id)->delete(); 
         if ($result) {
             return redirect('/pemasukkan')->with('berhasil','Dihapus!');
         }else{
             return redirect()->back()->with('berhasil','Berhasil!');
         }   
     }
     public function export($awal,$akhir){
    
        $data = Pemasukkan::where('tanggal','>=',Carbon::parse($awal)->toDateString())->where('tanggal','<=',Carbon::parse($akhir)->toDateString())->get()->toArray();
        $myData = [];
        $myData[] = ["Tanggal","Pemasukkan","Keterangan","Nominal"];
        foreach ($data as $key => $value) {
            $myData[] = [Carbon::parse($value['tanggal'])->format("d/m/Y"),$value['nama'],$value['keterangan'],$value['nominal']];
        }
        return Excel::download(new \App\Exports\MyExport($myData),'Pemasukkan.xlsx');
    }

    public function exportAll(){
    
        $data = Pemasukkan::get()->toArray();
        $myData = [];
        $myData[] = ["Tanggal","Pemasukkan","Keterangan","Nominal"];
        foreach ($data as $key => $value) {
            $myData[] = [Carbon::parse($value['tanggal'])->format("d/m/Y"),$value['nama'],$value['keterangan'],$value['nominal']];
        }
        return Excel::download(new \App\Exports\MyExport($myData),'Pemasukkan.xlsx');
    }
}
