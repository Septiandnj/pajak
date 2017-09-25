<?php

use Illuminate\Database\Seeder;
use App\sudutpandang;

class spseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $nfr2= new sudutpandang();
        $nfr2->arah="1 arah";
        $nfr2->skor="2";
        $nfr2->save();

        $nfr3= new sudutpandang();
        $nfr3->arah="2 arah";
        $nfr3->skor="4";
        $nfr3->save();

        $nfr4= new sudutpandang();
        $nfr4->arah="3 arah";
        $nfr4->skor="6";
        $nfr4->save();

        $nfr= new sudutpandang();
        $nfr->arah="4 arah";
        $nfr->skor="8";
        $nfr->save();


    }
}
