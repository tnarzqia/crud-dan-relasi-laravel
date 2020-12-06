<?php

namespace App\Http\Controllers;

use App\Murid;
use App\Clas;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Murid::all();
        return view('pages/siswa/index')->with([
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
        $kelas = Clas::all();
        return view('pages/siswa/create-siswa', compact('kelas'));
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
        $murid = new \App\Murid;
        $murid->nama_siswa = $request->get('nama_siswa');
        $murid->no = $request->get('no');
        $murid->nis = $request->get('nis');
        $murid->kelas_id = $request->get('kelas_id');
        $murid->save();

        return redirect()->route('siswa.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\murid  $murid
     * @return \Illuminate\Http\Response
     */
    public function show(murid $murid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\murid  $murid
     * @return \Illuminate\Http\Response
     */
    public function edit(murid $murid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\murid  $murid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, murid $murid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\murid  $murid
     * @return \Illuminate\Http\Response
     */
    public function destroy(murid $murid)
    {
        //
    }
}
