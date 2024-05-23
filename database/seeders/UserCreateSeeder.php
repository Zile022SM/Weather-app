<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UserCreateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 500; $i++) {
            User::create([
                'name' => $faker->name . '-' . $i,
                'email' => 'User '. $faker->unique()->safeEmail,
                'password' => bcrypt($faker->password),
            ]);
        }
    }
}
