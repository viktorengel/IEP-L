@extends('layouts.base')

@section('titulo')
    Asignaturas
@endsection

@section('principal')
<div class="container">
    <div class="row">
        <h1>Asignaturas</h1>

{{--         @foreach ($productos as $prod)
            {{ $prod->nombre }}
        @endforeach --}}

        <table border="2">
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Nombre Corto</td>
                <td>Detalle</td>
                <td>Acción</td>
            </tr>
            @foreach ($asignaturas as $asig)
            <tr>
                <td>{{ $asig->id }}</td>
                <td>{{ $asig->nombre }}</td>
                <td>{{ $asig->nombre_corto }}</td>
                <td>{{ $asig->detalle }}</td>
                <td><link rel="stylesheet" href="">Editar</td>
            </tr>
            @endforeach
        </table>

    </div>
</div>

@endsection