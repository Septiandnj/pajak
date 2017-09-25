<?php

use Illuminate\Database\Seeder;
use App\fungsiruang;
class nfrseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $nfr= new fungsiruang();
        $nfr->kawasan="Kawasan bebas";
        $nfr->skor="10";
        $nfr->save();

        $nfr2= new fungsiruang();
        $nfr2->kawasan="Kawasan selektif dan khusus";
        $nfr2->skor="9";
        $nfr2->save();

        $nfr3= new fungsiruang();
        $nfr3->kawasan="Kawasan umum";
        $nfr3->skor="8";
        $nfr3->save();
    }
}
