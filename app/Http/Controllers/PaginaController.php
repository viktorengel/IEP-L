<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function funInicio()
    {
        //$titulo = 'IEP';

        $imagenes = [
        'https://png.pngtree.com/thumb_back/fh260/background/20190223/ourmid/pngtree-simple-gradient-technology-banner-background-material-backgroundsimplegeneral-backgroundtechnology-background-image_85451.jpg',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnCe2vU4O4d3IKIXm2FyFsWG6n_BmodXjuYNhDKNq5&s',
        'https://png.pngtree.com/thumb_back/fh260/background/20190223/ourmid/pngtree-simple-gradient-technology-banner-background-material-backgroundsimplegeneral-backgroundtechnology-background-image_85451.jpg'];
        
        // return view('paginas.inicio',['titulo' => $titulo, 'imagenes' => $imagenes]);
        //return view('paginas.inicio',compact('titulo','imagenes'));
        return view('paginas.inicio',compact('imagenes'));
        // return view('paginas.inicio')->with('titulo', $titulo)->with('imagenes', $imagenes); 
    }

    public function funProductos()
    {
        return view('paginas.productos');
    }

    public function funBlog()
    {
        return view('paginas.blog');
    }

    public function funContactos()
    {
        return view('paginas.contacto');
    }
}
