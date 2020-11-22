<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = Usuario::all();
        return view("usuario.index")->with('usuarios', $usuarios);
    }
}
