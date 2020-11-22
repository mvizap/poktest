<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Cliente extends Model
{
    protected $table = 'cliente';

    public function getNombreAttribute($value)
    {
        return Str::title($value);
    }

    public function getEmailAttribute($value)
    {
        return Str::lower($value);
    }

    public function getSexoAttribute($value)
    {
        return Str::title($value);
    }

    public function getRegionAttribute($value)
    {
        return Str::title($value);
    }

    public function getRutAttribute($rut)
    {
        return number_format( substr ( $rut, 0 , -1 ) , 0, "", ".") . '-' . substr ( $rut, strlen($rut) -1 , 1 );
    }
}
