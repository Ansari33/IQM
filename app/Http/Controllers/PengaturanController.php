<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserLogin;
use App\Models\AksesUser;
use App\Models\Pengaturan;
use App\Models\Ustadzah;
use Carbon\Carbon;
use Session;
use Hash;

class PengaturanController extends Controller
{
    //
    public function authLogin(Request $request){
        #return $request->all();
        $data = UserLogin::with(['ustadzah'])->where('username',$request->username)->first();
        if ($data) {
            if (Hash::check($request->password,$data->password)) {
                Session::put('username',$data->username);
                Session::put('user_id',$data->id);
                Session::put('ustadzah_id',$data->ustadzah_id);
                Session::put('auth',true);
                return redirect('/dashboard');
            }
        }
        return redirect('/login');
        
    }

    public function index(){
        
       $data = collect(Pengaturan::get())->pluck('nilai','nama')->toArray();
       #return $data;
       $ustadzah = Ustadzah::get(['id','nama']); 
        return view('pengaturan.settings',compact('ustadzah','data'));
    }

    public function tambah(){
         $ustadzah =Ustadzah::get(['id','nama']);
        return view('user-menu.tambah',compact('ustadzah'));
    }

    public function simpan(Request $request ){
       return $request->all();

        if ($result) {
            return redirect('/user-menu')->with('berhasil','Ditambahkan!');
        }else{
            return redirect()->back()->with('Gagal','Gagal Ditambahkan!');
        }

    }
    public function edit($id){
         $ustadzah = Ustadzah::get(['id','nama']);
         $data = UserLogin::find($id);
        return view('user-menu.edit',compact('ustadzah','data'));
    }

    public function update(Request $request ){
        

       $result = false;
       Pengaturan::truncate();
       foreach($request->all() as $reqs => $req){
            Pengaturan::create(['nama' => $reqs,'nilai' => $req,]);
       }
       
        
        if ($result) {

            return redirect('/pengaturan')->with('berhasil','Diupdate!');
        }else{
            return redirect()->back()->with('berhasil','Gagal Diupdate!');
        }

    }

    public function hapus($id){
       
         $result = UserLogin::find($id)->delete();

         if ($result) {
             return redirect('/user-menu')->with('berhasil','Dihapus!');
         }else{
             return redirect()->back()->with('berhasil','Gagal Terhapus!');
         }
 
     }

     public function editAkses($id){
        $ustadzah = Ustadzah::get(['id','nama']);
        $data = UserLogin::find($id);
        $akses = AksesUser::where('user_id',$id)->get(['menu'])->pluck('menu')->toArray();
       return view('user-menu.akses',compact('ustadzah','data','akses'));
   }

   public function updateAkses(Request $request ){
     
     AksesUser::where('user_id',$request->id)->delete();
     $result = false;
     foreach ($request->akses as $key => $value) {
       $result = AksesUser::create([
            'user_id' => $request->id,
            'menu'    => $value
        ]);
     }

       if ($result) {

           return redirect('/user-menu')->with('berhasil','Mengupdate Akses!');
       }else{
           return redirect()->back()->with('berhasil','Gagal Mengupdate Akses!');
       }

   }
}
