<?php

namespace App\Http\Controllers;

use App\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis = Jenis::all();
        return view('jenis.index', ['jenis'=> $jenis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $request->validate([
            'kode_jenis' => 'required',
            'nama_jenis' => 'required',
        ]);

        Jenis::create($request->all());
        activity()->log('Menambah Jenis Barang');
        return redirect('/jenis')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function show(Jenis $jenis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function edit(Jenis $jenis)
    {
        return view('jenis.edit', compact('jenis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jenis $jenis)
    {
        $request->validate([
            'kode_jenis' => 'required',
            'nama_jenis' => 'required',
        ]);

        Jenis::where('id', $jenis->id)
                ->update([
                    'kode_jenis' =>$request->kode_jenis,
                    'nama_jenis' =>$request->nama_jenis
                ]);
                activity()->log('Mengedit Jenis Barang');
                return redirect('/jenis')->with('status', 'Data Jenis Telah Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jenis $jenis)
    {
        Jenis::destroy($jenis->id);
        activity()->log('Menghapus Jenis Barang');
        return redirect('/jenis')->with('status', 'Data Berhasil Dihapus');

    return view('jenis.index', compact('jenis'));
    }
}
