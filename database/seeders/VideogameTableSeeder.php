<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Videogame;
use Database\Factories\VideogameFactory;

class VideogameTableSeeder extends Seeder
{
    public function run()
    {
        Videogame::factory()->count(100)->create();
    }
}

// Ejecutar el seeder
//php artisan db:seed --class=VideogameTableSeeder
