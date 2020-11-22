<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Usuario extends Model
{
    protected $table = 'usuario';

    public function perfil()
    {
        return $this->belongsTo('App\Perfil', 'idPerfil');
    }

    public function getNombreAttribute($value)
    {
        return Str::title($value);
    }
    public function getApellidoAttribute($value)
    {
        return Str::title($value);
    }

    public function getCorreoAttribute($value)
    {
        return Str::lower($value);
    }

    public function getSexoAttribute($value)
    {
        return Str::title($value);
    }

    public function getEstadoAttribute($value)
    {
        return Str::title($value);
    }
    public function getRutAttribute($rut)
    {
        return number_format( substr ( $rut, 0 , -1 ) , 0, "", ".") . '-' . substr ( $rut, strlen($rut) -1 , 1 );
    }

}
