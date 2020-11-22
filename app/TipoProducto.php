<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TipoProducto extends Model
{
    protected $table = 'tipo_producto';
    protected $primaryKey = 'idTipoProducto';

    public function getDescripcionAttribute($value)
    {
        return Str::title($value);
    }
}
