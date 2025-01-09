<?php

namespace Database\Seeders;

use App\Models\Divisas;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::factory(100)->create();

        $this ->call([
            DivisasSeeder::class,
            UserSeeder::class,
            CasasDeApuestasSeeder::class,
            PersonaSeeder::class,
            ClienteCasaDivisasSeeder::class,]);
    }
}
