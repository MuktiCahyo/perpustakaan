<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserProfile;
use Faker\Factory as Faker;

class UserProfileSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        // Pastikan ada user, jika belum, buat 5 user
        if (User::count() == 0) {
            for ($i = 0; $i < 5; $i++) {
                $user = User::create([
                    'name' => $faker->name,
                    'email' => $faker->unique()->safeEmail,
                    'password' => bcrypt('password'),
                ]);
                UserProfile::create([
                    'user_id' => $user->id,
                    'address' => $faker->address,
                    'phone' => $faker->phoneNumber,
                    'birthdate' => $faker->date(),
                ]);
            }
        } else {
            foreach (User::all() as $user) {
                UserProfile::create([
                    'user_id' => $user->id,
                    'address' => $faker->address,
                    'phone' => $faker->phoneNumber,
                    'birthdate' => $faker->date(),
                ]);
            }
        }
    }
}
