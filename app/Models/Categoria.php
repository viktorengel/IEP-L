<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    //Categoria

    //protected $table = 'categorias';

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}
