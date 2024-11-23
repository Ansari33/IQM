<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Siswa;
use Illuminate\Support\Str;

class SiswaImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row => $data) 
        {
            if($row !== 0){
                Siswa::create([
                    'uid'	=> Str::random(16),
                    'nama'	=> $data[0],
                    'nis'	=> $data[1],
                    'nisn'	=> $data[2],
                    'kelamin'	=> $data[3],
                    'tempat_lahir'=> $data[4],
                    'tanggal_lahir'	=> $data[5],
                    'ayah'	=> $data[6],
                    'ibu'	=> $data[7],
                    'kontak_wali'	=> $data[8],
                    'status'	=> $data[9],
                    'tahun_masuk' => $data[10],

                ]);
            }
            
        }
        #return ($collection);
    }
}
