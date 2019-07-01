<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class PositionSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();

      foreach(range(1,50) as $index){
          DB::table('position')->insert([
              'name' => $faker->state
          ]);
      }
    }
}
