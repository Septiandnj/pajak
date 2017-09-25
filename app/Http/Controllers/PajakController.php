<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reklame;
use App\sudutpandang;
use App\fungsijalan;
use App\fungsiruang;
use App\entry;
use Alert;
class PajakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //
        $jenis=Reklame::all();
        $sudut=sudutpandang::all();
        $jalan=fungsijalan::all();
        $ruang=fungsiruang::all();
        return view('pajak', compact('jenis', 'sudut', 'jalan','ruang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $naskah=$request['naskah'];
        $jenis=$request['name'];
        $panjang=$request['panjang'];
        $lebar=$request['lebar'];
        $ukuran=$panjang*$lebar;
        $tinggi=$request['tinggi'];
        $lokasi=$request['lokasi'];
        $sudut=$request['sudut'];
        $jalan=$request['jalan'];
        $ruang=$request['ruang'];
        $strategis=$request['strategis'];
        $muka=$request['muka'];
        $izin=$request['izin'];
        $pemasangan=$request['pemasangan'];

        $tjenis= Reklame::find($jenis);
        $name=$tjenis->name;
        $dasar1=$tjenis->dasar1;
        $dasar2=$tjenis->dasar2;
        $dasar3=$tjenis->dasar3;
        $ket=$tjenis->ket;

        if ($ukuran == 1 || $ukuran <= 9.9) {
            $n1=$ukuran*$dasar1; 
        }else if ($ukuran == 10 || $ukuran <= 50 ) {
            $n1=$ukuran*$dasar2;
        }else if ($ukuran > 50){
            $n1=$ukuran*$dasar3;
        }else if ($ukuran <= 0){
            $n1=0;
        }else{
            $n1=0;
        }


        $n2=$tinggi*$ket;


        
        $njor=$n1+$n2;

        $nfj= fungsijalan::find($jalan);
        $skor1=$nfj->skor;
        $j=$nfj->jalan;
        $sp= sudutpandang::find($sudut);
        $skor2=$sp->skor;
        $s=$sp->arah;
        $nfr= fungsiruang::find($ruang);
        $skor3=$nfr->skor;
        $r=$nfr->kawasan;


        //nfr + nfj + sp
        //nfr = skor * 60% nfj = skor * 15% sp = skor * 25%
        $nspr=(($skor3*0.6)+($skor1*0.15)+($skor2*0.25))*$strategis;

        $nsr=$njor+$nspr;
        //pr = pajak reklame
        $pr=$nsr*0.25;

        $pajak = new entry();
        $pajak->naskah= $naskah;
        $pajak->jenis_id= $jenis;
        $pajak->ukuran= $ukuran;
        $pajak->ketinggian= $tinggi;
        $pajak->lokasi= $lokasi;
        $pajak->sudutpandang_id= $sudut;
        $pajak->fungsijalan_id= $jalan;
        $pajak->fungsiruang_id= $ruang;
        $pajak->jumlah_muka= $muka;
        $pajak->harga_dasar_strategis = $strategis;
        $pajak->masa_izin = $izin;
        $pajak->cara_pemasangan = $pemasangan;
        $pajak->njor= $njor;
        $pajak->nspr= $nspr;
        $pajak->nsr= $nsr;
        $pajak->pr= $pr;
        $pajak->save();
        Alert::success('Menambah Data', 'Berhasil')->autoclose(2000);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $jenis=Reklame::all();
        $sudut=sudutpandang::all();
        $jalan=fungsijalan::all();
        $ruang=fungsiruang::all();
        $pajak=entry::find($id);
        return view('detail', compact('jenis', 'sudut', 'jalan','ruang','pajak'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $jenis=Reklame::all();
        $sudut=sudutpandang::all();
        $jalan=fungsijalan::all();
        $ruang=fungsiruang::all();
        $pajak=entry::find($id);
        // return view('edit', compact('jenis', 'sudut', 'jalan','ruang','pajak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pajak = entry::findOrFail($id);
        $pajak->delete();
        return redirect('daftar');
        Alert::success('Menghapus Data', 'Berhasil')->autoclose(2000);
    }
    public function daftar()
    {
        //
        $jenis=Reklame::all();
        $sudut=sudutpandang::all();
        $jalan=fungsijalan::all();
        $ruang=fungsiruang::all();
        $pajak=entry::paginate(4);
        return view('daftar', compact('jenis', 'sudut', 'jalan','ruang','pajak'));

    }
}
