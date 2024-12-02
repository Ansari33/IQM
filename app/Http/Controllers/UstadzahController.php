<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ustadzah;
use DB;
use Excel;
use App\Imports\UstadzahImport;

class UstadzahController extends Controller
{
    //
    public function index(){
        
        $data = Ustadzah::with([])->get();
        return view('ustadzah.index',compact('data'));
    }

    public function tambah(){
        return view('ustadzah.tambah');
    }

    public function simpan(Request $request ){
        
        DB::beginTransaction();
        $result = Ustadzah::create([
            'nama' => $request->nama,
            'pendidikan_akhir' => $request->pendidikan_akhir,
            'lulusan' => $request->lulusan,
            'jurusan' => $request->jurusan,
            #'tanggal_lahir' => Carbon::parse( $request->tanggal_lahir )->format('Y-m-d'),
           // 'ijazah' => '',
            'kontak' => $request->kontak,
            'alamat' => $request->alamat,
            //'kelamin' => $request->foto,
        ]);

        if ($result) {
            $extFoto = ['jpg','png','JPG','PNG','jpeg'];
            $extSk = ['doc','docx','pdf','PDF','png'.'PNG'];
            if(isset($request->foto)){
                $foto = $request->file('foto');
                if (!in_array($foto->getClientOriginalExtension(),$extFoto)) {
                    DB::rollBack();
                    return redirect()->back()->with('gagal','Tipe Berkas Foto Tidak Diperbolehkan!');
                }
                $foto->move('foto-ustadzah/','foto-'.$result->id.'.'.$foto->getClientOriginalExtension());
                $result->foto = 'foto-'.$result->id.'.'.$foto->getClientOriginalExtension();
                #$result->save();
            }
            if(isset($request->sk)){
                $sk = $request->file('sk');
                if (!in_array($sk->getClientOriginalExtension(),$extSk)) {
                    DB::rollBack();
                    return redirect()->back()->with('gagal','Tipe Berkas SK Tidak Diperbolehkan!');
                }
                $sk->move('sk-ustadzah/','sk-'.$result->id.'.'.$sk->getClientOriginalExtension());
                $result->sk = 'sk-'.$result->id.'.'.$sk->getClientOriginalExtension();
                #$result->save();
            }
            if(isset($request->ijazah)){
                $ijazah = $request->file('ijazah');
                if (!in_array($ijazah->getClientOriginalExtension(),$extSk)) {
                    DB::rollBack();
                    return redirect()->back()->with('gagal','Tipe Berkas SK Tidak Diperbolehkan!');
                }
                $ijazah->move('ijazah-ustadzah/','ijazah-'.$result->id.'.'.$ijazah->getClientOriginalExtension());
                $result->ijazah = 'ijazah-'.$result->id.'.'.$ijazah->getClientOriginalExtension();
                #$result->save();
            }
            if(isset($request->ktp)){
                $ktp = $request->file('ktp');
                if (!in_array($ktp->getClientOriginalExtension(),$extSk)) {
                    DB::rollBack();
                    return redirect()->back()->with('gagal','Tipe Berkas SK Tidak Diperbolehkan!');
                }
                $ktp->move('ktp-ustadzah/','ktp-'.$result->id.'.'.$ktp->getClientOriginalExtension());
                $result->ktp = 'ktp-'.$result->id.'.'.$ktp->getClientOriginalExtension();
                #$result->save();
            }
            if(isset($request->kk)){
                $kk = $request->file('kk');
                if (!in_array($kk->getClientOriginalExtension(),$extSk)) {
                    DB::rollBack();
                    return redirect()->back()->with('gagal','Tipe Berkas SK Tidak Diperbolehkan!');
                }
                $kk->move('kk-ustadzah/','kk-'.$result->id.'.'.$kk->getClientOriginalExtension());
                $result->kk = 'kk-'.$result->id.'.'.$kk->getClientOriginalExtension();
                #$result->save();
            }
            $result->save();
            DB::commit();
            return redirect('/ustadzah')->with('berhasil','Ditambahkan!');
        }else{
            DB::rollBack();
            return redirect()->back()->with('gagal','Gagal!');
        }

    }
    public function edit($id){
        $data = Ustadzah::find($id);
        return view('ustadzah.edit',compact('data'));
    }

    public function update(Request $request ){
        $stringFoto = $request->fileFoto;
        $stringSk = $request->fileSk;
        $stringIj = $request->fileIj;
        $stringKtp = $request->fileKtp;
        $stringKk = $request->fileKk;
        $extFoto = ['jpg','png','JPG','PNG','jpeg','JPEG'];
        $extSk = ['doc','docx','pdf','PDF'];
        if (isset($request->foto)) {
            $foto = $request->file('foto');
            if (!in_array($foto->getClientOriginalExtension(),$extFoto)) {
                DB::rollBack();
                return redirect()->back()->with('gagal','Tipe Berkas Foto Tidak Diperbolehkan!');
            }
            $foto->move('foto-ustadzah/','foto-'.$request->id.'.'.$foto->getClientOriginalExtension());
            $stringFoto = 'foto-'.$request->id.'.'.$foto->getClientOriginalExtension();
            
        }
        if (isset($request->sk)) {
            $sk = $request->file('sk');
            if (!in_array($sk->getClientOriginalExtension(),$extSk)) {
                DB::rollBack();
                return redirect()->back()->with('gagal','Tipe Berkas SK Tidak Diperbolehkan!');
            }
            $sk->move('sk-ustadzah/','sk-'.$request->id.'.'.$sk->getClientOriginalExtension());
            $stringSk = 'sk-'.$request->id.'.'.$sk->getClientOriginalExtension();
            
        }
        if (isset($request->ijazah)) {
            $ij = $request->file('ijazah');
            if (!in_array($ij->getClientOriginalExtension(),$extSk)) {
                DB::rollBack();
                return redirect()->back()->with('gagal','Tipe Berkas Tidak Diperbolehkan!');
            }
            $ij->move('ijazah-ustadzah/','sk-'.$request->id.'.'.$ij->getClientOriginalExtension());
            $stringIj = 'ijazah-'.$request->id.'.'.$ij->getClientOriginalExtension();
            
        }
        if (isset($request->ktp)) {
            $ktp = $request->file('ktp');
            if (!in_array($ktp->getClientOriginalExtension(),$extSk)) {
                DB::rollBack();
                return redirect()->back()->with('gagal','Tipe Berkas Tidak Diperbolehkan!');
            }
            $ktp->move('ktp-ustadzah/','ktp-'.$request->id.'.'.$ktp->getClientOriginalExtension());
            $stringKtp = 'ktp-'.$request->id.'.'.$ktp->getClientOriginalExtension();
            
        }
        if (isset($request->kk)) {
            $kk = $request->file('kk');
            if (!in_array($kk->getClientOriginalExtension(),$extSk)) {
                DB::rollBack();
                return redirect()->back()->with('gagal','Tipe Berkas Tidak Diperbolehkan!');
            }
            $kk->move('kk-ustadzah/','kk-'.$request->id.'.'.$kk->getClientOriginalExtension());
            $stringKk = 'kk-'.$request->id.'.'.$kk->getClientOriginalExtension();
            
        }
        $result = Ustadzah::where('id',$request->id)->update([
            'nama' => $request->nama,
            'pendidikan_akhir' => $request->pendidikan_akhir,
            'lulusan' => $request->lulusan,
            'jurusan' => $request->jurusan,
            #'tanggal_lahir' => Carbon::parse( $request->tanggal_lahir )->format('Y-m-d'),
            'ijazah' => $stringIj,
            'kontak' => $request->kontak,
            'alamat' => $request->alamat,
            'foto' => $stringFoto,
            'sk' => $stringSk,
            'ktp' => $stringKtp,
            'kk' => $stringKk,
        ]);

        if ($result) {
            return redirect('/ustadzah')->with('berhasil','Diupdate!');
        }else{
            return redirect()->back()->with('berhasil','Berhasil!');
        }

    }

    public function hapus($id){
      
         $result = Ustadzah::where('id',$id)->delete();
 
         if ($result) {
             return redirect('/ustadzah')->with('berhasil','Dihapus!');
         }else{
             return redirect()->back()->with('berhasil','Berhasil!');
         }
 
    }

    public function export()
    {

        $data = Ustadzah::get()->toArray();
        $pendidikan = [
            '1' => 'SMA/SMK',
            '2' => 'S1',
            '3' => 'S2',
            '4' => 'S3',
        ];
        $myData = [];
        $myData[] = ["Nama", "Tempat Lahir","Tanggal Lahir", "Jenis Kelamin", "Jabatan", "Pendidikan", "Kampus","Kontak" ];
        foreach ($data as $key => $value) {
            $myData[] = [
                $value['nama'],
                $value['tempat_lahir'],
                $value['tanggal_lahir'],
                $value['kelamin'],
                //$value['jabatan'],
                null,
                $pendidikan[$value['pendidikan_akhir']],
                $value['lulusan'],
                $value['kontak'],
            ];
        }
        return Excel::download(new \App\Exports\MyExport($myData), 'Ustadzah.xlsx');
    }

    public function upload()
    {
        return view('ustadzah.upload');
    }
 
    public function simpanUpload(Request $request) {
        try {
            Excel::import(new UstadzahImport, request()->file('fname'));
            return redirect('/ustadzah')->with('berhasil','Mengupload!');
        } catch (\Exception $e) {
            return redirect()->back()->with('gagal',$e->getMessage());
        }
       
    }
}
