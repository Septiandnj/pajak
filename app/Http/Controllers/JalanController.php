<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fungsijalan;

class JalanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jalan=fungsijalan::all();
        return view('jalan.index',compact('jalan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jalan.create');
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
            'jalan' => 'required',
            'skor' => 'required|integer'
            ]);

        $jalan = new fungsijalan;
        $jalan->jalan = $request->jalan;
        $jalan->skor = $request->skor;
        $jalan->save();

        return redirect('jalan');
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
        $jalan= fungsijalan::findOrFail($id);
        return view('jalan.edit',compact('jalan'));
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
            'jalan' => 'required',
            'skor' => 'required|integer'
            ]);

        $jalan =fungsijalan::findOrFail($id);
        $jalan->jalan = $request->jalan;
        $jalan->skor = $request->skor;
        $jalan->save();

        return redirect('jalan');
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
        $jalan = fungsijalan::findOrFail($id);
        $jalan->delete();
        return redirect('jalan');
    }
}
