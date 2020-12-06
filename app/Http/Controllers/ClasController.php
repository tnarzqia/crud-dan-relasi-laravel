<?php

namespace App\Http\Controllers;

use App\Clas;
use Illuminate\Http\Request;

class ClasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //untuk menampilkan semua data dari database
        $data = Clas::all();
        return view('pages/kelas/index')->with([
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
        return view('pages/kelas/create_clas');
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
        $kelas = new \App\Clas;
        $kelas->nama = $request->get('nama');
        $kelas->save();

        return redirect()->route('clas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clas  $clas
     * @return \Illuminate\Http\Response
     */
    public function show(Clas $clas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clas  $clas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Clas::findOrFail($id);

        return view('pages/kelas/edit')->with([
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clas  $clas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $kelas = Clas::findOrFail($id);
        $kelas->nama = $request->get('nama');
        $kelas->save();

        return redirect()->route('clas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clas  $clas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $delete = Clas::findOrFail($id);
        $delete->delete();

        return redirect()->route('clas.index');
    }
}
