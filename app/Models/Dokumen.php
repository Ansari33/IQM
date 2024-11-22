<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;
    protected $table = 'dokumen_siswa';
    protected $guarded = [];


    public function pemilik()  {
        return $this->belongsTo('App\Models\Siswa','siswa_id','id');
    }

   
}
