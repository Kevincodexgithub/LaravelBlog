<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $curso = new Curso();

        $curso->name = "laravel";
        $curso->descripcion = "el mejor framework";
        $curso->categoria = "programacion";
        $curso->save();
    }
}
