<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat user admin
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'), // password default
        ]);

        // Jalankan seeder kategori dan artikel
        $this->call([
            CategorySeeder::class,
            ArticleSeeder::class,
            SliderSeeder::class, // Pastikan SliderSeeder juga dipanggil
        ]);
    }
}
