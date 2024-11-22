<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Siswa;
use App\Models\Alumni;
use Carbon\Carbon;
use Str;
use DB;
use Excel;

class SiswaController extends Controller
{
    //
    public function index()
    {

        $alumni = collect(Alumni::get(['siswa_id']))->pluck('siswa_id')->toArray();
        $data = Siswa::with([])->orderBy('id', 'desc')->get();
        return view('siswa.index', compact('data', 'alumni'));
    }
    public function indexTingkat($tingkat)
    {

        $alumni = collect(Alumni::get(['siswa_id']))->pluck('siswa_id')->toArray();
        $data = Siswa::with([])->where('tingkat', $tingkat)->orderBy('id', 'desc')->get();
        return view('siswa.index', compact('data', 'alumni'));
    }

    public function list()
    {

        return $data = Siswa::with([])->get();
        return view('siswa.index', compact('data'));
    }

    public function tambah()
    {
        return view('siswa.tambah');
    }

    public function simpan(Request $request)
    {

        #return $request->all();
        DB::beginTransaction();

        $result = Siswa::create([
            'uid' => Str::random(16),
            'nama' => $request->nama,
            'nis' => $request->nis,
            'nisn' => $request->nisn,
            'kelamin' => $request->kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => Carbon::parse($request->tanggal_lahir)->format('Y-m-d'),
            'ayah' => $request->ayah,
            'ibu' => $request->ibu,
            //'wali' => $request->wali,
            'kontak_wali' => $request->kontak_wali,
            'alamat' => $request->alamat,
            'desa' => $request->desa,
            'kecamatan' => $request->kecamatan,
            'tahun_masuk' => $request->tahun_masuk,
        ]);

        if ($result) {
            if (isset($request->foto)) {
                $extAcc = ['jpg', 'png'];
                $foto = $request->file('foto');
                if (!in_array($foto->getClientOriginalExtension(), $extAcc)) {
                    DB::rollBack();
                    return redirect()->back()->with('gagal', 'Tipe Berkas Foto Tidak Diperbolehkan!');
                }
                $foto->move('foto-siswa/', 'foto-' . $result->id . '.' . $foto->getClientOriginalExtension());
                $result->foto = 'foto-' . $result->id . '.' . $foto->getClientOriginalExtension();
                $result->save();
            }
            if (isset($request->kk)) {
                $extAcc = ['jpg', 'png', 'pdf'];
                $kk = $request->file('kk');
                if (!in_array($kk->getClientOriginalExtension(), $extAcc)) {
                    DB::rollBack();
                    return redirect()->back()->with('gagal', 'Tipe Berkas Foto Tidak Diperbolehkan!');
                }
                $kk->move('kk/', 'kk-' . $result->id . '.' . $kk->getClientOriginalExtension());
                $result->kk = 'kk-' . $result->id . '.' . $kk->getClientOriginalExtension();
                $result->save();
            }
            if (isset($request->akta)) {
                $extAcc = ['jpg', 'png', 'pdf'];
                $akta = $request->file('akta');
                if (!in_array($akta->getClientOriginalExtension(), $extAcc)) {
                    DB::rollBack();
                    return redirect()->back()->with('gagal', 'Tipe Berkas Foto Tidak Diperbolehkan!');
                }
                $akta->move('akta/', 'akta-' . $result->id . '.' . $akta->getClientOriginalExtension());
                $result->akta = 'akta-' . $result->id . '.' . $akta->getClientOriginalExtension();
                $result->save();
            }
            if (isset($request->ktp)) {
                $extAcc = ['jpg', 'png', 'pdf'];
                $ktp = $request->file('ktp');
                if (!in_array($ktp->getClientOriginalExtension(), $extAcc)) {
                    DB::rollBack();
                    return redirect()->back()->with('gagal', 'Tipe Berkas Foto Tidak Diperbolehkan!');
                }
                $ktp->move('ktp/', 'ktp-' . $result->id . '.' . $ktp->getClientOriginalExtension());
                $result->ktp = 'ktp-' . $result->id . '.' . $ktp->getClientOriginalExtension();
                $result->save();
            }
            if (isset($request->surat_pindah)) {
                $extAcc = ['jpg', 'png', 'pdf'];
                $surat_pindah = $request->file('surat_pindah');
                if (!in_array($foto->getClientOriginalExtension(), $extAcc)) {
                    DB::rollBack();
                    return redirect()->back()->with('gagal', 'Tipe Berkas Foto Tidak Diperbolehkan!');
                }
                $surat_pindah->move('surat-pindah/', 'surat-pindah-' . $result->id . '.' . $surat_pindah->getClientOriginalExtension());
                $result->surat_pindah = 'surat-pindah-' . $result->id . '.' . $surat_pindah->getClientOriginalExtension();
                $result->save();
            }
            DB::commit();
            return redirect('/siswa')->with('berhasil', 'Ditambahkan!');
        } else {
            DB::rollBack();
            return redirect()->back()->with('berhasil', 'Berhasil!');
        }
    }
    public function edit($id)
    {
        $data = Siswa::where('uid', $id)->first();
        return view('siswa.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $stringFoto = $request->fileFoto;
        $str_kk = $request->fileKk;
        $str_akta = $request->fileAkta;
        $str_ktp = $request->fileKtp;
        $str_surat_pindah = $request->fileSuratPindah;
        if (isset($request->foto)) {
            $extAcc = ['jpg', 'png','jpeg'];
            $foto = $request->file('foto');
            if (!in_array($foto->getClientOriginalExtension(), $extAcc)) {
                DB::rollBack();
                return redirect()->back()->with('gagal', 'Tipe Berkas Foto Tidak Diperbolehkan!');
            }
            $foto->move('foto-siswa/', 'foto-' . $request->id . '.' . $foto->getClientOriginalExtension());
            $stringFoto = 'foto-' . $request->id . '.' . $foto->getClientOriginalExtension();
        }
        if (isset($request->kk)) {
            $extAcc = ['jpg', 'png', 'pdf'];
            $kk = $request->file('kk');
            if (!in_array($kk->getClientOriginalExtension(), $extAcc)) {
                DB::rollBack();
                return redirect()->back()->with('gagal', 'Tipe Berkas Foto Tidak Diperbolehkan!');
            }
            $kk->move('kk/', 'kk-' . $request->id . '.' . $kk->getClientOriginalExtension());
            $str_kk = 'kk-' . $request->id . '.' . $kk->getClientOriginalExtension();
        }
        if (isset($request->akta)) {
            $extAcc = ['jpg', 'png', 'pdf'];
            $akta = $request->file('akta');
            if (!in_array($akta->getClientOriginalExtension(), $extAcc)) {
                DB::rollBack();
                return redirect()->back()->with('gagal', 'Tipe Berkas Foto Tidak Diperbolehkan!');
            }
            $akta->move('akta/', 'akta-' . $request->id . '.' . $akta->getClientOriginalExtension());
            $str_akta = 'akta-' . $request->id . '.' . $akta->getClientOriginalExtension();
        }
        if (isset($request->ktp)) {
            $extAcc = ['jpg', 'png', 'pdf'];
            $ktp = $request->file('ktp');
            if (!in_array($ktp->getClientOriginalExtension(), $extAcc)) {
                DB::rollBack();
                return redirect()->back()->with('gagal', 'Tipe Berkas Foto Tidak Diperbolehkan!');
            }
            $ktp->move('ktp/', 'ktp-' . $request->id . '.' . $ktp->getClientOriginalExtension());
            $str_ktp = 'ktp-' . $request->id . '.' . $ktp->getClientOriginalExtension();
        }
        if (isset($request->surat_pindah)) {
            $extAcc = ['jpg', 'png', 'pdf'];
            $surat_pindah = $request->file('surat_pindah');
            if (!in_array($foto->getClientOriginalExtension(), $extAcc)) {
                DB::rollBack();
                return redirect()->back()->with('gagal', 'Tipe Berkas Foto Tidak Diperbolehkan!');
            }
            $surat_pindah->move('surat-pindah/', 'surat-pindah-' . $request->id . '.' . $surat_pindah->getClientOriginalExtension());
            $str_surat_pindah = 'surat-pindah-' . $request->id . '.' . $surat_pindah->getClientOriginalExtension();
        }
        $result = Siswa::where('id', $request->id)->update([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'nisn' => $request->nisn,
            'kelamin' => $request->kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => Carbon::parse($request->tanggal_lahir)->format('Y-m-d'),
            'ayah' => $request->ayah,
            'ibu' => $request->ibu,
            'kontak_wali' => $request->kontak_wali,
            'alamat' => $request->alamat,
            'desa' => $request->desa,
            'kecamatan' => $request->kecamatan,
            'tahun_masuk' => $request->tahun_masuk,
            'foto' => $stringFoto,
            'kk' => $str_kk,
            'akta' => $str_akta,
            'ktp' => $str_ktp,
            'surat_pindah' => $str_surat_pindah,
        ]);

        if ($result) {
            return redirect('/siswa')->with('berhasil', 'Diupdate!');
        } else {
            return redirect()->back()->with('gagal', 'Gagal Mengupdate!');
        }
    }

    public function hapus($id)
    {

        $result = Siswa::where('uid', $id)->delete();

        if ($result) {
            return redirect('/siswa')->with('berhasil', 'Dihapus!');
        } else {
            return redirect()->back()->with('berhasil', 'Berhasil!');
        }
    }

    public function export()
    {

        $data = Siswa::get()->toArray();
        $myData = [];
        $myData[] = ["Nama", "NIS","NISN", "Jenis Kelamin", "Tempat Lahir", "Tanggal Lahir", "Ayah","Ibu", "Kontak Wali", "Status", "Tahun Masuk"];
        foreach ($data as $key => $value) {
            $myData[] = [
                $value['nama'],
                $value['nis'],
                $value['nisn'],
                $value['kelamin'],
                $value['tempat_lahir'],
                $value['tanggal_lahir'],
                $value['ayah'],
                $value['ibu'],
                $value['kontak_wali'],
                $value['status'],
                $value['tahun_masuk'],
            ];
        }
        return Excel::download(new \App\Exports\MyExport($myData), 'Siswa.xlsx');
    }
}
