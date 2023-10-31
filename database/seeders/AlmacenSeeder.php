<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Almacen;

class AlmacenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('almacenes')->insert([
            ['nombre' => 'Las Palmas'],
            ['nombre' => 'Tenerife'],
            ['nombre' => 'La Gomera'],
        ]);
    }
}
