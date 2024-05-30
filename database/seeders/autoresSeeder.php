<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Autor;

class autoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Autor::create([
            'nombre' => 'MIGUEL DE CERVANTES',
        ]);
        Autor::create([
            'nombre' => 'MARQUÉS DE SADE',
        ]);
        Autor::create([
            'nombre' => 'VLADIMIR NABOKOV',
        ]);
    }
}
