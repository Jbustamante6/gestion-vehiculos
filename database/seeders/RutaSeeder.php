<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class RutaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rutas')->insert([
            [
                'nombre' => 'Ruta A',
                'origen' => 'Ciudad A',
                'destino' => 'Ciudad B',
                'distancia' => 150.0  // En kilómetros
            ],
            [
                'nombre' => 'Ruta B',
                'origen' => 'Ciudad B',
                'destino' => 'Ciudad C',
                'distancia' => 200.0  // En kilómetros
            ],
        ]);
    }
}
