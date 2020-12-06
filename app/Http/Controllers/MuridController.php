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
        $data1 = Clas::all();
        return view('pages/siswa/index', compact('data1'))->with([
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
    public function edit($siswa_id)
    {
        //
        $data = murid::findOrFail($siswa_id);
        $kelas = Clas::all();
        return view('pages/siswa/edit-siswa', compact('kelas'))->with([
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\murid  $murid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $siswa_id)
    {
        //
        // $update = Murid::findOrFail($siswa_id);
        // $kelas = Clas::all();
        // $update->nama_siswa = $request->get('nama_siswa');
        // $update->no = $request->get('no');
        // $update->nis = $request->get('nis');
        // $update->kelas_id = $request->get('kelas_id');
        // $update->save();
        // $kelas->save();

        // return redirect()->route('siswa.index', compact('kelas'));
        $murid = new \App\Murid;
        $update = Clas::all();
        $murid->nama_siswa = $request->get('nama_siswa');
        $murid->no = $request->get('no');
        $murid->nis = $request->get('nis');
        $murid->kelas_id = $request->get('kelas_id');
        $murid->save();

        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\murid  $murid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $delete = Murid::findOrFail($id);
        $delete->delete();

        return redirect()->route('siswa.index');
    }
}
