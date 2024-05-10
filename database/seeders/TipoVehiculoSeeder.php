<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TipoVehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_vehiculos')->insert([
            [
                'tipo' => 'Carga'
            ],
            [
                'tipo' => 'Pasajeros'
            ]
        ]);
    }
}
