<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCompras extends Model
{
    protected $table = 'detalle_compras';

    protected $fillable = ['id', 'nombre', 'precio', 'compra_id','categoria_id','created_at','updated_at'];
}
