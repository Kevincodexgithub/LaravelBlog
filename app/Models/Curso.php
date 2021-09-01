<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //protected $fillable = ['name', 'descripcion', 'categoria'];//se asigan solo los campos que se van a guardar en la base

    protected $guarded = []; //se asignan los campos que no se van a guardar en la base

    // protected $table = "users"; // ignora la convencion y va afectar a la tabla users en la base

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
