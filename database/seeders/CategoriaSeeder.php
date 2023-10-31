<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \DB::table('categorias')->insert([
            ['nombre' => 'Gráficas'],
            ['nombre' => 'Procesadores'],
            ['nombre' => 'RAM'],
            
        ]);
    }
}
