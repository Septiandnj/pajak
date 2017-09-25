<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ReklameSeeder::class);
        $this->call(nfrseeder::class);
        $this->call(nfjseeder::class);
        $this->call(spseeder::class);
    }
}
