<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ItinerarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('itinerarios')->insert([
            [
                'fecha' => '2024-01-01',
                'hora_salida' => '08:00:00',
                'rutas_id' => 2,
                'vehiculos_id' => 3,
                'conductores_id' => 1,
            ],
            [
                'fecha' => '2024-01-02',
                'hora_salida' => '09:00:00',
                'rutas_id' => 1,
                'vehiculos_id' => 3,
                'conductores_id' => 2,
            ],
        ]);
    }
}
