<?php

namespace App\Http\Controllers;

use App\Models\Perpustakaan;
use Illuminate\Http\Request;

class PerpustakaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perpustakaan = Perpustakaan::All();
        return view('perpustakaan', ['perpustakaan' => $perpustakaan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Menangkap Data Yang Diinput
$nbi = $request->get('nbi');
$nama_mhs = $request->get('nama_mhs');
//Menyimpan data kedalam tabel
$save_mhs = new \App\Models\Perpustakaan();
$save_mhs->nbi = $nbi;
$save_mhs->nama_mhs = $nama_mhs;
$save_mhs->save();
return redirect()->route('perpustakaan.index');
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
        $mhs_edit = \App\Models\Perpustakaan::findOrFail($id);
return view('edit', ['perpustakaan' => $mhs_edit]);

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
        $mhs = \App\Models\Perpustakaan::findOrFail($id);
$mhs->delete();
return redirect()->route('perpustakaan.index');
    }
}
