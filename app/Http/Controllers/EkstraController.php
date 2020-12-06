<?php

namespace App\Http\Controllers;

use App\Ekstra;
use Illuminate\Http\Request;

class EkstraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Ekstra::all();
        return view('pages/extra/index')->with([
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages/extra/create-extra');
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
        $extra = new \App\Ekstra;
        $extra->nama = $request->get('nama');
        $extra->save();

        return redirect()->route('extra.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ekstra  $ekstra
     * @return \Illuminate\Http\Response
     */
    public function show(Ekstra $ekstra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ekstra  $ekstra
     * @return \Illuminate\Http\Response
     */
    public function edit(Ekstra $ekstra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ekstra  $ekstra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ekstra $ekstra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ekstra  $ekstra
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $delete = Ekstra::findOrFail($id);
        $delete->delete();

        return redirect()->route('extra.index');
    }
}
