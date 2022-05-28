<?php

namespace App\Http\Controllers;

use App\Models\stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $stock = stock::all();
        return view('stock.index')->with('stock', $stock);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $stock = stock::all();
        return view('stock.create')->with('stock', $stock);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 1. validasi input data kosong
        $validateData = $request->validate([
            'nama_roti'  => 'required',
            'Rasa_roti' => 'required'
        ]);

        // 2. simpan
        $stock = new stock();
        $stock->nama_roti  = $validateData['nama_roti'];
        $stock->Rasa_roti = $validateData['Rasa_roti'];

        $stock->save(); // simpan ke tabel prodis
        return redirect()->route('stock.index'); // redirect ke prodi.index
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(stock $stock)
    {
        //
        return view('stock.show')->with('stock', $stock);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(stock $stock)
    {
        //
        $stock = stock::all();
        return view('stock.edit')->with('stock', $stock)->with('stock', $stock);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stock $stock)
    {
        //
        // 1. validasi input data kosong
        $validateData = $request->validate([
            'nama_roti'  => 'required',
            'Rasa_roti' => 'required'
        ]);

        // 2. simpan perubahan
        Prodi::where('id', $stock->id)->update($validateData);
        $request->session()->flash('info', "Data Stock berhasil diubah");
        return redirect()->route('stock.index'); // redirect ke prodi.index

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(stock $stock)
    {
        //
    }
}
