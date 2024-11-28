<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Ustadzah;
use Illuminate\Support\Str;

class UstadzahImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row => $data) 
        {
            if($row !== 0){
                Ustadzah::create([
                    'uid'	=> Str::random(16),
                    'nama'	=> $data[0],
                    'tempat_lahir'	=> $data[1],
                    'tanggal_lahir'	=> $data[2] == 'null' ? null : str_replace('"',"",$data[2]),
                    'kelamin'	=> $data[3],
                  //  'jabatan'=> $data[4],
                    'pendidikan_akhir'	=> $data[5],
                    'lulusan'	=> $data[6],
                    'kontak'	=> $data[7],

                ]);
            }
            
        }
    }
}
