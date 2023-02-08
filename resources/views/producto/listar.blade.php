@extends('layouts.base')

@section('titulo')
    Contactos
@endsection

@section('principal')
<div class="container">
    <div class="table-responsive">
        <h1>Productos</h1>

{{--         @foreach ($productos as $prod)
            {{ $prod->nombre }}
        @endforeach --}}

        <a href="/producto/crear">Nuevo producto</a>
        
        <table  class="table table-hover">
            <tr align="center">
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>SubTotal</th>
                <th>Imagen</th>
                <th>Acción</th>
            </tr>
            @foreach ($productos as $prod)
            <tr align="center">
                <td>{{ $prod->id }}</td>
                <td>{{ $prod->nombre }}</td>
                <td>{{ $prod->precio }}</td>
                <td>{{ $prod->cantidad }}</td>
                <td>{{ $prod->cantidad*$prod->precio }}</td>
                <td><img src="{{ $prod->imagen }}" alt="" width="150px"></td>
                <td><a href="/producto/{{ $prod->id }}/editar">Editar</a></td>
            </tr>
            @endforeach
        </table>

    </div>
</div>

@endsection