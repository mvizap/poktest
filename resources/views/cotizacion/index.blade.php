@extends('app')

@section('contenido')
    <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
        <div class="lh-100">
            <h6 class="mb-0 text-white lh-100">Cotizaciones</h6>
            <small>Lista de todos las cotizaciones</small>
        </div>
    </div>


    <div class="my-3 p-3 bg-white rounded shadow-sm table-responsive">
        <table class="table small">
            <thead class="thead-light">
                <tr>
                    <th>id</th>
                    <th>Rut Cliente</th>
                    <th>Creación</th>
                    <th>Modificación</th>
                    <th>Estado</th>
                    <th>Crédito</th>
                    <th>Monto Crédito</th>
                    <th>Subtotal</th>
                    <th>Descuento</th>
                    <th>Total</th>
                    <th>Acción</th>
                    
                </tr>
            </thead>
            <tbody>
                            
            @foreach ($cotizaciones as $cotizacion)
                <tr>
                    <td> {{ $cotizacion->idCotizacion }} </td>
                    <td> {{ $cotizacion->cliente->rut }} </td>
                    <td> {{ $cotizacion->fechaCreacion }} </td>
                    <td> {{ $cotizacion->fechaModificacion }} </td>
                    <td> {{ $cotizacion->estado }} </td>
                    <td> {{ $cotizacion->credito }} </td>
                    <td> {{ $cotizacion->montoCredito }} </td>
                    <td> {{ $cotizacion->subtotal}}</td>
                    <td> {{ $cotizacion->descuento}}</td>
                    <td> {{ $cotizacion->total}}</td>
                    <td><a class="btn bg-buttom text-white" href="{{ route('cotizacion.show', $cotizacion->idCotizacion )}}">Detalle</a></td> 
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection