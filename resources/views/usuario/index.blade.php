@extends('app')

@section('contenido')
    <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
        <div class="lh-100">
            <h6 class="mb-0 text-white lh-100">Usuarios</h6>
            <small>Lista de todos los usuarios</small>
        </div>
    </div>
    
    <div class="my-3 p-3 bg-white rounded shadow-sm table-responsive">
        <table class="table small">
            <thead class="thead-light">
                <tr>
                    <th>id</th>
                    <th>Rut Cliente</th>
                    <th>Perfil</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th>Estado</th>
                </tr>
            </thead>

            <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td> {{ $usuario->id }} </td>
                    <td> {{ $usuario->rut }} </td>
                    <td> {{ $usuario->perfil->descripcion }} </td>
                    <td> {{ $usuario->nombre }}</td>
                    <td> {{ $usuario->apellido }}</td>
                    <td> {{ $usuario->correo }}</td>
                    <td> {{ $usuario->edad }}</td>
                    <td> {{ $usuario->sexo }}</td>
                    <td> {{ $usuario->estado }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
      </div>

    
    
@endsection