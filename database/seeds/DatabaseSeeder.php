<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeder::class);
        $this->call(PositionSeder::class);
        $this->call(EmployeeSeder::class);
    }
}
