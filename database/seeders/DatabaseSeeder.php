<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        \App\Models\TipoSector::factory()->create([
            'name' => 'Financiero'
        ]);

        \App\Models\TipoSector::factory()->create([
            'name' => 'Administrativo'
        ]);

        \App\Models\TipoTamanio::factory()->create([
            'name' => 'Grande'
        ]);

        \App\Models\TipoTamanio::factory()->create([
            'name' => 'Pequeño'
        ]);
    }
}
