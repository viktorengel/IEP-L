@extends('layouts.base')

@section('titulo')
    Editar Producto
@endsection

@section('principal')
<div class="container">
    <div class="row">
        <h1>Editar Producto</h1>

        <form action="/producto/{{ $producto->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="">Ingrese Nombre</label>
            <input type="text" name="nombre" value="{{ $producto->nombre }}">
            <br>
            <label for="">Ingrese Precio</label>
            <input type="number" name="precio" step="0.01" value="{{ $producto->precio }}">
            <br>
            <label for="">Ingrese Cantidad</label>
            <input type="number" name="cantidad" value="{{ $producto->cantidad }}">
            <br>
            <label for="">Ingrese Imagen</label>
            <input type="text" name="imagen" value="{{ $producto->imagen }}">
            <input type="file" name="imagen" value="{{ $producto->imagen }}">
            <br>
            <label for="">Ingrese descripción</label>
            <textarea name="descripcion" id="" cols="30" rows="10">{{ $producto->descripcion }}</textarea>
            <br>
            <input type="submit" value="Modificar">
        </form>
    </div>
</div>

@endsection
