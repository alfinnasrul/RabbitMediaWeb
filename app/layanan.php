<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
    protected $table = 'layanans';

    protected $fillable = ['id','judul'];
}
