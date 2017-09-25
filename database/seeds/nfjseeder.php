<?php

use Illuminate\Database\Seeder;
use App\fungsijalan;


class nfjseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $nfj= new fungsijalan();
        $nfj->jalan="Jalan Tol";
        $nfj->skor="10";
        $nfj->save();

        $nfj2= new fungsijalan();
        $nfj2->jalan="Jalan Nasional/Arteri Primer";
        $nfj2->skor="9";
        $nfj2->save();

        $nfj3= new fungsijalan();
        $nfj3->jalan="Jalan Provinsi/Arteri Sekunder";
        $nfj3->skor="8";
        $nfj3->save();

        $nfj4= new fungsijalan();
        $nfj4->jalan="Lokal/Lingkungan";
        $nfj4->skor="6";
        $nfj4->save();




    }
}
