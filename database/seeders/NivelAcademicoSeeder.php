<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelAcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now(); // Obtener el tiempo actual

        $data = [
            ['descripcion' => 'Licenciatura', 'created_at' => $now, 'updated_at' => $now],
            ['descripcion' => 'Especialidad', 'created_at' => $now, 'updated_at' => $now],
            ['descripcion' => 'Mestría', 'created_at' => $now, 'updated_at' => $now],
        ];
        DB::table('niveles_academicos')->insert($data);
    }
}
