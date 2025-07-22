<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $categoryIds = Category::pluck('id')->toArray();

        for ($i = 0; $i < 20; $i++) {
            Book::create([
                'title' => $faker->sentence(3),
                'category_id' => $faker->randomElement($categoryIds),
                'isbn' => $faker->unique()->isbn13,
                'published_year' => $faker->year,
                'stock' => $faker->numberBetween(1, 20),
            ]);
        }
    }
}
