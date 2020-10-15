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
                "nombre" => "Perdidos",
            ]
            );
        DB::table('categorias')->insert(
            [
                "nombre" => "Encontrados",
            ]
            );
        DB::table('categorias')->insert(
            [
                "nombre" => "Adopcion",
            ]
            );

    }
}
