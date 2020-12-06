<?php

namespace App\Http\Controllers;

use App\Ektra;
use Illuminate\Http\Request;
use DB;

class EktraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Ektra::all();

        return view('pages/extras/index')->with([
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
        return view('pages/extras/create-extra');
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
        $simpan = new \App\Ektra;
        $simpan->nama = $request->get('nama');
        $simpan->save();

        return redirect()->route('extra.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ektra  $ektra
     * @return \Illuminate\Http\Response
     */
    public function show(Ektra $ektra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ektra  $ektra
     * @return \Illuminate\Http\Response
     */
    public function edit($extra_id)
    {
        //
        $data = Ektra::findOrFail($extra_id);

        return view('pages/extras/edit-extra')->with([
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ektra  $ektra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ektra $ektra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ektra  $ektra
     * @return \Illuminate\Http\Response
     */
    public function destroy($extra_id)
    {
        //
        $delete = Ektra::findOrFail($extra_id);
        $delete->delete();

        return redirect()->route('extra.index');
    }
}
