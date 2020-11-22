@extends('app')

@section('contenido')
    <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
        <div class="lh-100">
            <h6 class="mb-0 text-white lh-100">Cotizacion Nº {{ $cotizacion->idCotizacion }} </h6>
            <small>Detalle Cotizacion</small>
        </div>
    </div>
    <div class="d-flex  table-responsive">
        <div class="col-sm my-2 p-2 bg-white rounded shadow-sm  ">
            <h6 class="border-bottom border-gray pb-2 mb-0"><i class="fas fa-user"></i> Cliente</h6>
            <table class="table small">
                <tbody class="thead-light">
                        <th>Rut Cliente</th>
                        <td> {{ $cliente->rut }} </td>
                    </tr>
                        <th>Nombre</th>
                        <td> {{ $cliente->nombre}}</td>
                    </tr>
                        <th>Telefono</th>
                        <td> {{ $cliente->telefono}}</td>
                    </tr>
                        <th>Email</th>
                        <td> {{ $cliente->email}}</td>
                    </tr>
                        <th>Edad</th>
                        <td> {{ $cliente->edad}}</td>
                    </tr>
                        <th>Sexo</th>
                        <td> {{ $cliente->sexo}}</td>
                    </tr>
                        <th>Region</th>
                        <td> {{ $cliente->region}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm my-2 p-2 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0"><i class="fas fa-user-secret"></i> Usuario</h6>
            <table class="table small">
                <tbody class="thead-light">
                        <th>Rut Usuario</th>
                        <td> {{ $usuario->rut }} </td>
                    </tr>
                        <th>Perfil</th>
                        <td> {{ $usuario->perfil->descripcion }} </td>
                    </tr>
                        <th>Nombre</th>
                        <td> {{ $usuario->nombre }} {{ $usuario->apellido }}</td>
                    </tr>
                        <th>Correo</th>
                        <td> {{ $usuario->correo }}</td>
                    </tr>
                        <th>Edad</th>
                        <td> {{ $usuario->edad }}</td>
                    </tr>
                        <th>Sexo</th>
                        <td> {{ $usuario->sexo }}</td>
                    </tr>
                        <th>Estado</th>
                        <td> {{ $usuario->estado }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
 
    <div class="my-3 p-3 bg-white rounded shadow-sm table-responsive">
        <h6 class="border-bottom border-gray pb-2 mb-0"><i class="fas fa-file-alt"></i> Cotización</h6>
        <table class="table small">
            <thead class="thead-light">
                <tr>
                    <th>id</th>
                    <th>Creación</th>
                    <th>Modificación</th>
                    <th>Estado</th>
                    <th>Crédito</th>
                    <th>Monto Crédito</th>
                    <th>Subtotal</th>
                    <th>Descuento</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> {{ $cotizacion->idCotizacion }} </td>
                    <td> {{ $cotizacion->fechaCreacion }} </td>
                    <td> {{ $cotizacion->fechaModificacion }} </td>
                    <td> {{ $cotizacion->estado }} </td>
                    <td> {{ $cotizacion->credito }} </td>
                    <td> {{ $cotizacion->montoCredito }} </td>
                    <td> {{ $cotizacion->subtotal}}</td>
                    <td> {{ $cotizacion->descuento}}</td>
                    <td> {{ $cotizacion->total}}</td>
                    
                </tr>
            </tbody>
        </table>
    </div>

    <div class="my-3 p-3 bg-white rounded shadow-sm table-responsive">
        <h6 class="border-bottom border-gray pb-2 mb-0"><i class="fas fa-building"></i> Productos</h6>
        <table class="table small">
            <thead class="thead-light">
                <tr>
                    <th>id</th>
                    <th>Descripcion</th>
                    <th>Tipo</th>
                    <th>Valor Lista</th>
                    <th>Orientacion</th>
                    <th>Piso</th>
                    <th>Superficie</th>
                    <th>Estado</th>
                    <th>Creacion</th>
                    <th>Edicion</th>
                    <th>Sector</th>
                </tr>
            </thead>
            <tbody>
                
            @foreach ($productos as $producto)
                <tr>
                    <td> {{ $producto->idProducto }} </td>
                    <td> {{ $producto->descripcion }} </td>
                    <td> {{ $producto->tipoProducto->descripcion }} </td>
                    <td> {{ $producto->valorLista}}</td>
                    <td> {{ $producto->orientacion}}</td>
                    <td> {{ $producto->piso}}</td>
                    <td> {{ $producto->superficie}}</td>
                    <td> {{ $producto->estado}}</td>
                    <td> {{ $producto->fechaCreacion}}</td>
                    <td> {{ $producto->fechaEdicion}}</td>
                    <td> {{ $producto->sector}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection