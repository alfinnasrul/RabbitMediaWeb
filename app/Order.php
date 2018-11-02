<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['id', 'name', 'phone', 'address', 'email', 'service', 'description'];
}
