<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoDocumento;


class tiposDocumentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoDocumento::create([
            'descripcion' => 'Libro',
        ]);
        TipoDocumento::create([
            'descripcion' => 'Revista',
        ]);
        TipoDocumento::create([
            'descripcion' => 'Periodico',
        ]);
    }
}
