<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;
use App\Models\Siswa;
//use App\Models\Jenis;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function client(){
        
        $data = Blog::with([])->paginate(10);
        return view('profile.blogs',compact('data'));
    }

    public function view($request){
        
        $data = Blog::with([])->where('judul', $request)->first();
        return view('profile.blog-view',compact('data'));
    }
    //
    public function index(){
        
        $data = Blog::with(['siswa'])->get();
        return view('blog-kegiatan.index',compact('data'));
    }

    

    public function tambah(){
    
        return view('blog-kegiatan.tambah');
    }

    public function simpan(Request $request ){
        #return $request->all();
        $result = Blog::create([
            'judul' => $request->judul,
            'gambar' => '',
            'isi' => $request->isi,
        ]);

        if ($result) {
            if(isset($request->gambar)){
                $extAcc = ['JPG','jpg','PNG','png','JPEG','jpeg'];
                $gambar = $request->file('gambar');
                if (!in_array($gambar->getClientOriginalExtension(),$extAcc)) {
                   
                    return redirect()->back()->with('gagal','Tipe Berkas Tidak Diperbolehkan!');
                }
                $gambar->move('gambar-blog/','blog-'.$result->id.'.'.$gambar->getClientOriginalExtension());
                $result->gambar = 'blog-'.$result->id.'.'.$gambar->getClientOriginalExtension();
                $result->save();
            }
            return redirect('/blog')->with('berhasil','Ditambahkan!');
        }else{
            return redirect()->back()->with('berhasil','Berhasil!');
        }

    }
    public function edit($id){
        $data = Blog::find($id);;
        return view('blog-kegiatan.edit',compact('data'));
    }

    public function update(Request $request ){
        
        $result = Blog::find($request->id);
    
        if ($result) {
            $gambars = $result->gambar; 
            if(isset($request->gambar)){
                $extAcc = ['JPG','jpg','PNG','png','JPEG','jpeg'];
                $gambar = $request->file('gambar');
                if (!in_array($gambar->getClientOriginalExtension(),$extAcc)) {
                   
                    return redirect()->back()->with('gagal','Tipe Berkas Tidak Diperbolehkan!');
                }
                $gambar->move('gambar-blog/','blog-'.$result->id.'.'.$gambar->getClientOriginalExtension());
                $gambars = 'blog-'.$result->id.'.'.$gambar->getClientOriginalExtension();
             
            }
            $result->judul = $request->judul;
            $result->isi = $request->isi;
            $result->gambar = $gambars;
            $result->save();
        
            return redirect('/blog')->with('berhasil','Diupdate!');
        }else{
            return redirect()->back()->with('gagal','Gagal!');
        }

    }

    public function hapus($id){
      
         $result = Blog::where('id',$id)->delete();
 
         if ($result) {
             return redirect('/blog')->with('berhasil','Dihapus!');
         }else{
             return redirect()->back()->with('berhasil','Berhasil!');
         }
 
     }

     public function sebaran(){
        $data = [];
        #$sekolah = collect(Blog::distinct()->get(['lanjutan']))->pluck('lanjuatan');
        $alumni = Blog::get();
        foreach ($alumni as $key => $value) 
        if(array_key_exists($value['lanjutan'],$data)){
           $data[$value['lanjutan']] += 1;
        }else{
            $data[$value['lanjutan']] = 0;
            $data[$value['lanjutan']] += 1;
        }
        return view('blog-kegiatan.sebaran',compact('data'));

    } 
}
