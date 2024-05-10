<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        DB::table('vehiculos')->insert([
            [
                'tipo_vehiculos_id' => 2,
                'capacidad' => 50,  // Capacidad para pasajeros
                'placa' => 'ABC1234'
            ],
            [
                'tipo_vehiculos_id' => 1,
                'capacidad' => 5000,  // Capacidad para carga en kg
                'placa' => 'XYZ5678'
            ],
            [
                'tipo_vehiculos_id' => 1,
                'capacidad' => 100,  // Capacidad para carga ligera
                'placa' => 'MOTO123'
            ],        
        ]);
    }
}
