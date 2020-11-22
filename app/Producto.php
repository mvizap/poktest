<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Producto extends Model
{
    protected $table = 'producto';
    protected $primaryKey = 'idProducto';

    public function tipoProducto()
    {
        return $this->belongsTo('App\TipoProducto', 'idTipoProducto');
    }

    public function getFechaCreacionAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }
    public function getFechaEdicionAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function getSectorAttribute($value)
    {
        return Str::title($value);
    }
    public function getEstadoAttribute($value)
    {
        return Str::title($value);
    }

    public function getValorListaAttribute($number)
    {
        return sprintf('$ %s', number_format($number, 0, ',', '.'));
    }
    

}
