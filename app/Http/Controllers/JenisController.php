<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reklame;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reklame=Reklame::all();
        return view('jenis.index',compact('reklame'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jenis.create');
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
            'name' => 'required',
            'dasar1' => 'required|integer',
            'dasar2' => 'required|integer',
            'dasar3' => 'required|integer',
            'ket' => 'required|integer'
            ]);

        $reklame = new Reklame;
        $reklame->name = $request->name;
        $reklame->dasar1 = $request->dasar1;
        $reklame->dasar2 = $request->dasar2;
        $reklame->dasar3 = $request->dasar3;
        $reklame->ket = $request->ket;
        $reklame->save();

        return redirect('jenis');
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
        $reklame= Reklame::findOrFail($id);
        return view('jenis.edit',compact('reklame'));
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
            'name' => 'required',
            'dasar1' => 'required|integer',
            'dasar2' => 'required|integer',
            'dasar3' => 'required|integer',
            'ket' => 'required|integer'
            ]);

        $reklame =Reklame::findOrFail($id);
        $reklame->name = $request->name;
        $reklame->dasar1 = $request->dasar1;
        $reklame->dasar2 = $request->dasar2;
        $reklame->dasar3 = $request->dasar3;
        $reklame->ket = $request->ket;
        $reklame->save();

        return redirect('jenis');
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
        $reklame = Reklame::findOrFail($id);
        $reklame->delete();
        return redirect('jenis');
    }
}
