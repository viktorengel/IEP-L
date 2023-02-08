<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsignaturaController extends Controller
{
    public function listar()
    {
        $asignaturas = DB::select('select * from asignaturas');

        return view('asignatura.listar', compact('asignaturas'));
    }
}