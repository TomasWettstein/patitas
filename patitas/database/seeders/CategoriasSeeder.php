<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(
            [
                "nombre" => "Perdido",
            ]
            );
        DB::table('categorias')->insert(
            [
                "nombre" => "Encontrado",
            ]
            );
        DB::table('categorias')->insert(
            [
                "nombre" => "Adopcion",
            ]
            );

    }
}
