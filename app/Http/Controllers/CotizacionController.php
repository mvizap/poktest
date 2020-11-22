<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cotizacion;
use App\Cliente;
use App\Producto;
use App\Usuario;

class CotizacionController extends Controller
{
    public function index(){
        $cotizaciones = Cotizacion::all();
        return view("cotizacion.index")->with('cotizaciones', $cotizaciones);
    }

    public function cotizacionShow($id){
        $cotizacion = Cotizacion::find($id);
        $cliente = $cotizacion->cliente;
        $productos = $cotizacion->producto;
        $usuario = $cotizacion->usuario;
        return view("cotizacion.detalle")->with('cotizacion', $cotizacion)
                                        ->with('productos', $productos)
                                        ->with('cliente', $cliente)
                                        ->with('usuario', $usuario);
    }
    
}
