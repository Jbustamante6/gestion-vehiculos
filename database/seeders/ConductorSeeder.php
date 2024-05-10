<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ConductorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('conductores')->insert([
            [
                'nombre' => 'John Doe',
                'licencia' => '123456789'
            ],
            [
                'nombre' => 'Jane Smith',
                'licencia' => '987654321'
            ],        
        ]);

    }
}
