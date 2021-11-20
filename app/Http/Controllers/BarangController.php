<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Jenis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = DB::table('jenis_barang')
                ->join('tb_barang','jenis_barang.id', '=', 'tb_barang.jenis_id')
                ->select('tb_barang.*','jenis_barang.nama_jenis')
                ->get();
        return view('barang.index', ['barang'=> $barang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Jenis::orderBy('nama_jenis', 'asc')->get();
        return view('barang.create', ['barang'=>$barang]);
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
            'kode_barang' => 'required',
            'jenis_id' => 'required',
            'nama_barang' => 'required',
            'harga_barang' => 'required',
            'stock_barang' => 'required',
            'keterangan' => 'required',
        ]);

        Barang::create($request->all());

        return redirect('/barang')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::find($id);
        return view('barang.show',compact('barang'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        $jenis = Jenis::orderBy('nama_jenis', 'asc')->get();
        return view('barang.edit', compact('barang', 'jenis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'kode_barang' => 'required',
            'jenis_id' => 'required',
            'nama_barang' => 'required',
            'harga_barang' => 'required',
            'stock_barang' => 'required',
            'keterangan' => 'required',
        ]);

        Barang::where('id', $barang->id)
                ->update([
                    'kode_barang' =>$request->kode_barang,
                    'jenis_id' =>$request->jenis_id,
                    'nama_barang' =>$request->nama_barang,
                    'harga_barang' =>$request->harga_barang,
                    'stock_barang' =>$request->stock_barang,
                    'keterangan' =>$request->keterangan,
                ]);
                return redirect('/barang')->with('status', 'Data Barang Telah Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        Barang::destroy($barang->id);
        return redirect('/barang')->with('status', 'Data Berhasil Dihapus');

    return view('barang.index', compact('barang'));
    }

    
    public function guest()
    {
        $barang = DB::table('jenis_barang')
        ->join('tb_barang','jenis_barang.id', '=', 'tb_barang.jenis_id')
        ->select('tb_barang.*','jenis_barang.nama_jenis')
        ->get();
        return view('barang-guest', ['barang'=> $barang]);
    }

    public function showguest($id)
    {
        $barang = Barang::find($id);
        return view('show-guest',compact('barang'));
    }
}
