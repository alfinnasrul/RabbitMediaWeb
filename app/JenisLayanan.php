<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisLayanan extends Model
{
    protected $table = "jenis_layanans";

    protected $guarded = ['id'];

    public function layanans()
    {
        $this->hasMany(layanan::class,'jenislayanan_id');
    }
}
