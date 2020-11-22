<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Perfil extends Model
{
    protected $table = 'perfil';
    protected $primaryKey = 'idPerfil';

    public function getDescripcionAttribute($value)
    {
        return Str::title($value);
    }
}
