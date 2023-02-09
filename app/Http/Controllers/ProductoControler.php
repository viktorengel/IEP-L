<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoControler extends Controller
{
    public function listar()
    {
        $productos = DB::select('select * from productosX');
        return view('producto.listar', compact('productos'));
    }
    
    public function crear()
    {
        return view('producto.nuevo');
    }

    public function guardar(Request $request)
    /* Inyección de dependencia */
    {
        //subir imagen

        $direccion_imagen ="";

        if($file = $request->file('imagen')){
            $direccion_imagen = time() .'-'. $file->getClientOriginalName();
            $file->move('imagenes/',$direccion_imagen);

            $direccion_imagen = 'imagenes/'.$direccion_imagen;
        }

        $producto = [
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'cantidad' => $request->cantidad,
            'imagen' => $direccion_imagen,
            'descripcion' => $request->descripcion,
        ];
        DB::table('productos')->insert($producto);
        return redirect('/productos');
    }

    public function mostrar($id)
    /* Para mostrar necesitarmos 
    recibir el ID de quien vamos a mostrar */
    {

    }

    public function editar($id)
    {
        $producto = DB::table('productos')->find($id);
        return view('producto.editar',compact('producto'));
    }

    public function modificar($id, Request $request)
    /* recibir el ID de quien vamos a modificar
    y con que datos vamos a reemplazar */
    /* Inyección de dependencia */
    {
        $direccion_imagen ="";

        if($file = $request->file('imagen')){
            $direccion_imagen = time() .'-'. $file->getClientOriginalName();
            $file->move('imagenes/',$direccion_imagen);

            $direccion_imagen = 'imagenes/'.$direccion_imagen;
        }

        $producto = [
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'cantidad' => $request->cantidad,
            'imagen' => $direccion_imagen,
            'descripcion' => $request->descripcion,
        ];
        DB::table('productos')->where('id',$id)->update($producto);
        return redirect('/productos');
    }

    public function eliminar($id)
    {

    }
}
