<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use Illuminate\Http\Request;

use App\Models\Siswa;
use App\Models\Spp;
use Carbon\Carbon;
use Excel;

class SppController extends Controller
{
    //
    public function index(){
        $ta = Pengaturan::where('nama','ta_aktif')->first()->nilai;
        $rangkuman = [
            'bulan' => Spp::where('tahun_ajaran',$ta)->where('bulan',date('m'))->sum('nominal'),
            'ta' => Spp::where('tahun_ajaran',$ta)->sum('nominal'),
            'semua' => Spp::sum('nominal')
        ];
        $siswa =Siswa::get(['id','nama']);
        $data = Spp::with(['siswa'])->get();
        #return $rangkuman;
        return view('spp.index',compact('data','rangkuman','siswa'));
    }

    public function tambah(){
         $siswa =Siswa::get(['id','nama']);
        return view('spp.tambah',compact('siswa'));
    }

    public function simpan(Request $request ){
       
        $result = Spp::create([
            'tanggal' => Carbon::createFromFormat('m/d/Y', $request->tanggal)->toDateString() ,
            'siswa_id' => $request->siswa,
            'bulan' => $request->bulan,
            'tahun_ajaran' => $request->tahun_ajaran,
            'nominal' => $request->nominal,
            'keterangan' => $request->keterangan,
        ]);

        if ($result) {
            if(isset($request->bukti)){
                $foto = $request->file('bukti');
                $foto->move('bukti-spp/','bukti-'.$result->id.'.'.$foto->getClientOriginalExtension());
                $result->bukti = 'bukti-'.$result->id.'.'.$foto->getClientOriginalExtension();
                $result->save();
            }

            return redirect('/spp')->with('berhasil','Ditambahkan!');
        }else{
            return redirect()->back()->with('Gagal','Gagal Ditambahkan!');
        }

    }
    public function edit($id){
        $siswa = Siswa::get(['id','nama']);
        $data = Spp::find($id);
        return view('spp.edit',compact('siswa','data'));
    }

    public function update(Request $request ){
        $namaBukti = $request->namaBukti;
        if(isset($request->bukti)){
            $foto = $request->file('bukti');
            $foto->move('bukti-spp/','bukti-'.$request->id.'.'.$foto->getClientOriginalExtension());
            $namaBukti = 'bukti-'.$request->id.'.'.$foto->getClientOriginalExtension();
        }
       $result = Spp::find($request->id);
       $result->tanggal = Carbon::createFromFormat('m/d/Y', $request->tanggal)->toDateString();
       $result->siswa_id = $request->siswa;
       $result->bulan = $request->bulan;
       $result->tahun_ajaran = $request->tahun_ajaran;
       $result->nominal = $request->nominal;
       $result->keterangan = $request->keterangan;
       $result->bukti = $namaBukti;
       $result->save();


        if ($result) {

            return redirect('/spp')->with('berhasil','Diupdate!');
        }else{
            return redirect()->back()->with('berhasil','Gagal Di!');
        }

    }

    public function hapus($id){
       
         $result = Spp::find($id)->delete();

         if ($result) {
             return redirect('/spp')->with('berhasil','Dihapus!');
         }else{
             return redirect()->back()->with('berhasil','Gagal Terhapus!');
         }
 
     }

     public function exportExcel($filter,$value){
    
        $ta = Pengaturan::where('nama','ta_aktif')->first()->nilai;
        if ($filter == 'siswa') {
            $data = Spp::with(['siswa'])->where('siswa_id',$value)->get();
        }else {
            $data = Spp::with(['siswa'])->where('bulan',$value)->where('tahun_ajaran',$ta)->get();
        }
        
        $myData = [];
        $myData[] = ["Tanggal","Siswa","Bulan","Tahun Ajaran", "Nominal"];
        foreach ($data as $key => $vx) {
            $myData[] = [Carbon::parse($vx['tanggal'])->format("d/m/Y"),$vx['siswa']['nama'],$vx['bulan'],$vx['tahun_ajaran'],$vx['nominal']];
        }
        return Excel::download(new \App\Exports\MyExport($myData),'Spp.xlsx');
    }

    public function exportExcelAll(){
        $data = Spp::with(['siswa'])->get();
        $myData = [];
        $myData[] = ["Tanggal","Siswa","Bulan","Tahun Ajaran", "Nominal"];
        foreach ($data as $key => $vx) {
            $myData[] = [Carbon::parse($vx['tanggal'])->format("d/m/Y"),$vx['siswa']['nama'],$vx['bulan'],$vx['tahun_ajaran'],$vx['nominal']];
        }
        return Excel::download(new \App\Exports\MyExport($myData),'Spp.xlsx');;
    }
}
