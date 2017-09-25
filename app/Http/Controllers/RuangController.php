<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fungsiruang;
use Alert;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ruang=fungsiruang::paginate(4);
        return view('ruang.index',compact('ruang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ruang.create');
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
            'kawasan' => 'required',
            'skor' => 'required|integer'
            ]);

        $ruang = new fungsiruang;
        $ruang->kawasan = $request->kawasan;
        $ruang->skor = $request->skor;
        $ruang->save();
        Alert::success('Menambah Data', 'Berhasil')->autoclose(2000);
        return redirect('ruang');
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
        $ruang= fungsiruang::findOrFail($id);
        return view('ruang.edit',compact('ruang'));
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
            'kawasan' => 'required',
            'skor' => 'required|integer'
            ]);

        $ruang =fungsiruang::findOrFail($id);
        $ruang->kawasan = $request->kawasan;
        $ruang->skor = $request->skor;
        $ruang->save();
        Alert::success('Mengubah Data', 'Berhasil')->autoclose(2000);
        return redirect('ruang');
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
        $ruang = fungsiruang::findOrFail($id);
        $ruang->delete();
        Alert::success('Menghapus Data', 'Berhasil')->autoclose(2000);
        return redirect('ruang');
    }
}
