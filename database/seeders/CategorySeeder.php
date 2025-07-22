<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = ['Fiksi', 'Non-Fiksi', 'Teknologi', 'Sains', 'Sejarah', 'Bisnis', 'Komik'];
        foreach ($categories as $cat) {
            Category::create(['name' => $cat]);
        }
    }
}
