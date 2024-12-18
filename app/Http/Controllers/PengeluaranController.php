<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Pengeluaran;
use App\Models\Pengaturan;
use Carbon\Carbon;
use Excel;

class PengeluaranController extends Controller
{
    //
    public function index(){
        
        $data = Pengeluaran::with([])->get();
        $rangkuman= [];
        $ta = Pengaturan::where('nama','ta_aktif')->first()->nilai;
        $rangkuman['bulan'] = Pengeluaran::whereMonth('tanggal',date("m"))->where('tahun_ajaran',$ta)->sum('nominal');
        
        $rangkuman['ta'] = Pengeluaran::where('tahun_ajaran',$ta)->sum('nominal');
        $rangkuman['semua'] = Pengeluaran::sum('nominal');
        return view('pengeluaran.index',compact('data','rangkuman'));
    }

    public function tambah(){
        $stok = [];
        return view('pengeluaran.tambah',compact('stok'));
    }

    public function simpan(Request $request ){
        
        $result = Pengeluaran::create([
            'tanggal' => Carbon::createFromFormat('m/d/Y', $request->tanggal)->toDateString() ,
            'nama' => $request->nama,
            'nominal' => $request->nominal,
            'tahun_ajaran' => $request->tahun_ajaran,
            // 'total' => $request->total,
            'keterangan' => $request->keterangan,
        ]);

        if ($result) {
            if(isset($request->bukti)){
                $foto = $request->file('bukti');
                $foto->move('bukti-pengeluaran/','bukti-'.$result->id.'.'.$foto->getClientOriginalExtension());
                $result->bukti = 'bukti-'.$result->id.'.'.$foto->getClientOriginalExtension();
                $result->save();
            }
            return redirect('/pengeluaran')->with('berhasil','Ditambahkan!');
        }else{
            return redirect()->back()->with('berhasil','Berhasil!');
        }

    }
    public function edit($id){
        $stok = [];
        $data = Pengeluaran::find($id);
        return view('pengeluaran.edit',compact('stok','data'));
    }

    public function update(Request $request ){
        $namaBukti = $request->namaBukti;
        if(isset($request->bukti)){
            $foto = $request->file('bukti');
            $foto->move('bukti-pengeluaran/','bukti-'.$request->id.'.'.$foto->getClientOriginalExtension());
            $namaBukti = 'bukti-'.$request->id.'.'.$foto->getClientOriginalExtension();
        }
       $result = Pengeluaran::find($request->id);
       $result->tanggal = Carbon::createFromFormat('m/d/Y', $request->tanggal)->toDateString();
       $result->nama = $request->nama;
       $result->nominal = $request->nominal;
       $result->tahun_ajaran = $request->tahun_ajaran;
       $result->keterangan = $request->keterangan;
       $result->bukti = $namaBukti;
       $result->save();
        if ($result) {
            return redirect('/pengeluaran')->with('berhasil','Diupdate!');
        }else{
            return redirect()->back()->with('berhasil','Berhasil!');
        }

    }

    public function hapus($id){
         $result = Pengeluaran::find($id)->delete();

         if ($result) {
             return redirect('/pengeluaran')->with('berhasil','Dihapus!');
         }else{
             return redirect()->back()->with('berhasil','Berhasil!');
         }
 
    }
    public function export($awal,$akhir){
        //return Carbon::parse($awal)->toDateString();
        $data = Pengeluaran::where('tanggal','>=',Carbon::parse($awal)->toDateString())->where('tanggal','<=',Carbon::parse($akhir)->toDateString())->get()->toArray();
        $myData = [];
        $myData[] = ["Tanggal","Pengeluaran","Keterangan","Nominal"];
        foreach ($data as $key => $value) {
            $myData[] = [Carbon::parse($value['tanggal'])->format("d/m/Y"),$value['nama'],$value['keterangan'],$value['nominal']];
        }
        return Excel::download(new \App\Exports\MyExport($myData),'Pengeluaran.xlsx');
    }

    public function exportAll(){
        //return Carbon::parse($awal)->toDateString();
        $data = Pengeluaran::get()->toArray();
        $myData = [];
        $myData[] = ["Tanggal","Pengeluaran","Keterangan","Nominal"];
        foreach ($data as $key => $value) {
            $myData[] = [Carbon::parse($value['tanggal'])->format("d/m/Y"),$value['nama'],$value['keterangan'],$value['nominal']];
        }
        return Excel::download(new \App\Exports\MyExport($myData),'Pengeluaran.xlsx');
    }
}
