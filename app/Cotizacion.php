<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Cotizacion extends Model
{
    protected $table = 'cotizacion';
    protected $primaryKey = 'idCotizacion';

    public function cliente()
    {
        return $this->belongsTo('App\Cliente', 'idCliente');
    }  

    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'idUsuario');
    }

    public function producto()
    {
        return $this->belongsToMany('App\Producto', 'cotizacion_producto', 'idCotizacion', 'idProducto');
    }
    public function getFechaCreacionAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }
    public function getFechaModificacionAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function getSubtotalAttribute($number)
    {
        return sprintf('$ %s', number_format($number, 0, ',', '.'));
    }

    public function getTotalAttribute($number)
    {
        return sprintf('$ %s', number_format($number, 0, ',', '.'));
    }
    public function getDescuentoAttribute($number)
    {
        return sprintf('%s %%', number_format($number, 0, ',', '.'));
    }

    public function getEstadoAttribute($value)
    {
        return Str::title($value);
    }

   
}


