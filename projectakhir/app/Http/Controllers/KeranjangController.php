<?php

namespace App\Http\Controllers;

use App\Models\keranjang;
use App\Models\stock;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $keranjang = keranjang::all();
        return view('keranjang.index')->with('keranjang',$keranjang);
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
        return view('keranjang.create')->with('stock',$stock);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate data 
        $validateData = $request->validate([
            'stock_id' => 'required',
            'jumlah' => 'required'
        ]);

        //simpan data 
        $keranjang = new keranjang();
        $keranjang->stock_id = $validateData['stock_id'];
        $keranjang->jumlah = $validateData['jumlah'];

        $keranjang->save(); // simpan ke tabel 
        $request->session()->flash('info', "Data keranjang berhasil ditambah");
        return redirect()->route('keranjang.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function show(keranjang $keranjang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function edit(keranjang $keranjang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, keranjang $keranjang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\keranjang  $keranjang
     * @return \Illuminate\Http\Response
     */
    public function destroy(keranjang $keranjang)
    {
        //
    }
}
