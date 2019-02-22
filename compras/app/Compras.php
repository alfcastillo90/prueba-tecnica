<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    protected $table = 'compras';

    protected $fillable = ['id', 'cantidad', 'producto', 'created_at','updated_at'];
}
