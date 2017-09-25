<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sudutpandang;
use Alert;

class SudutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sudut=sudutpandang::paginate(4);
        return view('sudut.index',compact('sudut'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sudut.create');
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
        $this->validate($request, [
            'arah' => 'required',
            'skor' => 'required|integer'
            ]);

        $sudut = new sudutpandang;
        $sudut->arah = $request->arah;
        $sudut->skor = $request->skor;
        $sudut->save();
        Alert::success('Menambah Data', 'Berhasil')->autoclose(2000);
        return redirect('sudut');
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
        $sudut= sudutpandang::findOrFail($id);
        return view('sudut.edit',compact('sudut'));
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
         $this->validate($request, [
            'arah' => 'required',
            'skor' => 'required|integer'
            ]);

        $sudut =sudutpandang::findOrFail($id);
        $sudut->arah = $request->arah;
        $sudut->skor = $request->skor;
        $sudut->save();
        Alert::success('Mengubah Data', 'Berhasil')->autoclose(2000);
        return redirect('sudut');
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
        $sudut = sudutpandang::findOrFail($id);
        $sudut->delete();
        Alert::success('Menghapus Data', 'Berhasil')->autoclose(2000);
        return redirect('sudut');
    }
}
