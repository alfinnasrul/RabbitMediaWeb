<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
    protected $table = 'layanans';

    protected $guarded = ['id'];


    public function jenisLayanans()
    {
        $this->belongsTo(JenisLayanan::class);
    }
}
