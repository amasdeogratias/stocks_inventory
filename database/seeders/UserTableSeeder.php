<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        User::create([
            'LoginId'      =>  '1',
            'name'      =>  $faker->name,
            'email'     =>  'admin@admin.com',
            'password'  =>  bcrypt('Admin@1234'),
        ]);
    }
}
