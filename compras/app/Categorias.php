<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = 'categorias';

    protected $fillable = ['id', 'nombre','created_at','updated_at'];
}
