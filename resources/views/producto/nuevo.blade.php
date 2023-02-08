@extends('layouts.base')

@section('titulo')
    Nuevo Producto
@endsection

@section('principal')
<div class="container">
    <div class="row">
        <h1>Nuevo Producto</h1>

        <form action="/producto" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">Ingrese Nombre</label>
            <input type="text" name="nombre">
            <br>
            <label for="">Ingrese Precio</label>
            <input type="number" name="precio" step="0.01">
            <br>
            <label for="">Ingrese Cantidad</label>
            <input type="number" name="cantidad">
            <br>
            <label for="">Ingrese Imagen</label>
            {{-- <input type="text" name="imagen"> --}}
            <input type="file" name="imagen" id="">
            <br>
            <label for="">Ingrese descripción</label>
            <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</div>

@endsection
