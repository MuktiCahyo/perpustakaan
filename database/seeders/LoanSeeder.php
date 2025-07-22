<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Loan;
use App\Models\User;
use App\Models\Book;
use Faker\Factory as Faker;

class LoanSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $userIds = User::pluck('id')->toArray();
        $bookIds = Book::pluck('id')->toArray();

        for ($i = 0; $i < 20; $i++) {
            Loan::create([
                'user_id' => $faker->randomElement($userIds),
                'book_id' => $faker->randomElement($bookIds),
                'loan_date' => $faker->dateTimeBetween('-1 year', 'now'),
                'return_date' => $faker->optional()->dateTimeBetween('now', '+1 month'),
                'status' => $faker->randomElement(['borrowed', 'returned', 'late']),
            ]);
        }
    }
}
