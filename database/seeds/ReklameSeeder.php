<?php

use Illuminate\Database\Seeder;
use App\Reklame;

class ReklameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $reklame= new Reklame();
        $reklame->name = "Billboard Papan";
        $reklame->dasar1 = "915000";
        $reklame->dasar2 = "1220000";
        $reklame->dasar3 = "4575000";
        $reklame->ket = "366000";
        $reklame->save();
    }
}
