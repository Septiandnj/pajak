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
        $reklame->name = "Billboard/Papan";
        $reklame->dasar1 = "915000";
        $reklame->dasar2 = "1220000";
        $reklame->dasar3 = "1525000";
        $reklame->ket = "122000";
        $reklame->save();

        $reklame2= new Reklame();
        $reklame2->name = "Megatron";
        $reklame2->dasar1 = "2440000";
        $reklame2->dasar2 = "3050000";
        $reklame2->dasar3 = "3600000";
        $reklame2->ket = "244000";
        $reklame2->save();

        $reklame3= new Reklame();
        $reklame3->name = "Videotron";
        $reklame3->dasar1 = "2440000";
        $reklame3->dasar2 = "3050000";
        $reklame3->dasar3 = "3600000";
        $reklame3->ket = "244000";
        $reklame3->save();

        $reklame4= new Reklame();
        $reklame4->name = "LED";
        $reklame4->dasar1 = "2440000";
        $reklame4->dasar2 = "3050000";
        $reklame4->dasar3 = "3600000";
        $reklame4->ket = "244000";
        $reklame4->save();

        $reklame5= new Reklame();
        $reklame5->name = "RunningText";
        $reklame5->dasar1 = "2440000";
        $reklame5->dasar2 = "3050000";
        $reklame5->dasar3 = "3600000";
        $reklame5->ket = "244000";
        $reklame5->save();

        $reklame6= new Reklame();
        $reklame6->name = "NeonBox";
        $reklame6->dasar1 = "915000";
        $reklame6->dasar2 = "1220000";
        $reklame6->dasar3 = "1525000";
        $reklame6->ket = "122000";
        $reklame6->save();

        $reklame7= new Reklame();
        $reklame7->name = "Reklame Tembok";
        $reklame7->dasar1 = "915000";
        $reklame7->dasar2 = "1220000";
        $reklame7->dasar3 = "1525000";
        $reklame7->ket = "122000";
        $reklame7->save();
    }
}
