<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Obat', 'image' => 'assets/img/Obat.jpg'],
            ['name' => 'Pangan', 'image' => 'assets/img/Pangan.jpg'],
            ['name' => 'Kosmetik', 'image' => 'assets/img/Kosmetik.jpg'],
            ['name' => 'Obat Tradisional', 'image' => 'assets/img/ObatTradisional.jpg'],
            ['name' => 'Suplemen Kesehatan', 'image' => 'assets/img/SuplemenKesehatan.jpg'],
            ['name' => 'Materi FKP', 'image' => 'assets/img/MateriFKP.jpg'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

    }
}


