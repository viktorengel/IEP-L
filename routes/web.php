<?php

use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ProductoControler;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

// Closure
/* Route::get('/saludo', function(){
    return 'Hola IEP';
}); */


/* Route::get('/productos', function(){
    return view('misProductos');
}); */

/* Rutas de las Paginas */

Route::get('/', [PaginaController::class, 'funInicio']);
//Route::get('/productos', [PaginaController::class, 'funProductos']);
Route::get('/blog',[PaginaController::class, 'funBlog']);
Route::get('/contacto',[PaginaController::class, 'funContactos']);
Route::get('/asignaturas', [AsignaturaController::class, 'listar']);

/* Rutas del CRUD Productos */

/* Muestra la lista de Productos */
Route::get('/productos',[ProductoControler::class, 'listar']);

/* Cargar el Form (creación) y (Guardado) */
Route::get('/producto/crear',[ProductoControler::class, 'crear']);
Route::post('/producto',[ProductoControler::class, 'guardar']);

/* Muestra el Productos indicado*/
Route::get('/producto/{id}',[ProductoControler::class, 'mostrar']);

/* Cargar el Form (edición) y (modificación) */
Route::get('/producto/{id}/editar',[ProductoControler::class, 'editar']);
Route::put('/producto/{id}',[ProductoControler::class, 'modificar']);

/* Elimina el Productos indicado*/
Route::delete('/producto/{id}',[ProductoControler::class, 'eliminar']);

/* Route::get('/nosotros', function(){
    return view('acercaDe');
}); */


/* Route::get('/servicios', [PaginaController::class, 'misServicios']); */
