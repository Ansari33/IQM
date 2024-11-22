<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RaporIwr;
use App\Models\IndikatorIwr;
use App\Models\Siswa;
use Carbon\Carbon;

class RaporIwrController extends Controller
{
    //
    public function index(){
        
        $data = RaporIwr::with([])->get();
        return view('rapor.iwr.index',compact('data'));
    }

    public function tambah(){
        $indikator = IndikatorIwr::get();
        $siswa = Siswa::get(['id','nama']);
        return view('rapor.iwr.tambah',compact('indikator','siswa'));
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
            $result = RaporIwr::create([
                'siswa_id' => $request->siswa,
                'jilid' => $request->jilid,
                'tanggal' => Carbon::createFromFormat('m/d/Y', $request->tanggal)->toDateString(),
                'nilai' => json_encode($nilai)
            ]);
        #}
        if ($result) {
            return redirect('/rapor/iwr')->with('berhasil','Ditambahkan!');
        }else{
            return redirect()->back()->with('Gagal','Gagal Ditambahkan!');
        }

    }
    public function edit($id){
        $data = RaporIwr::find($id);
        $indikator = IndikatorIwr::get();
        $siswa = Siswa::get(['id','nama']);
        return view('rapor.iwr.edit',compact('data','indikator','siswa'));
    }

    public function update(Request $request ){
       
        
        $result = RaporIwr::find($request->id);
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
            $result->jilid = $request->jilid;
            $result->tanggal = Carbon::createFromFormat('m/d/Y', $request->tanggal)->toDateString();
            $result->nilai = json_encode($nilai);
            $result->save();
            
            return redirect('/rapor/iwr')->with('berhasil','Diupdate!');
        }else{
            return redirect('/rapor/iwr')->with('gagal','Gagal!');
        }

    }

    public function hapus($id){
       
         $result = RaporIwr::find($id)->delete();

         if ($result) {
             return redirect('/rapor/iwr')->with('berhasil','Dihapus!');
         }else{
             return redirect()->back()->with('berhasil','Gagal Terhapus!');
         }
 
     }
}
