<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EmployeeSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,50000) as $index)
        {
            DB::table('employees')->insert([
                'nama' => $faker->firstNameMale,
                'email' => $faker->freeEmail,
                'phone' => $faker->tollFreePhoneNumber,
                'role_id' => rand(1,3),
                'position_id' => rand(1,50),
                'salary' => $faker->longitude($min = -180, $max = 180),
                'photo' => $faker->slug
            ]);
        }
    }
}
