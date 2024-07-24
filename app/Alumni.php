<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $fillable = [
        'id_mahasiswa',
        'id_pekerjaan',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class);
    }
}
