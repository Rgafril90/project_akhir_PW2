<?php

namespace App\Http\Controllers;

use App\Models\checkout;
use App\Models\keranjang;
use App\Models\order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $checkout = checkout::all();
        $keranjang = keranjang::all();
        return view('checkout.index')->with('checkout',$checkout)->with('keranjang',$keranjang);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //jika ingnin melihat data apakah masuk atau tidak 
        // dd($request);
        
         //validate input data kosong
         $validateData = $request->validate([
            'nama'=>'required',
            'email'=>'required',
            'noHp' => 'required',
            'alamat' => 'required'
        ]);

        //simpan
        $checkout = new checkout();
        $checkout -> nama = $validateData['nama']   ;
        $checkout -> email = $validateData['email'];
        $checkout -> noHp = $validateData['noHp'];
        $checkout -> alamat = $validateData['alamat'];

        $checkout->save();

        // ambil id checkout 
        
        // ambil keranjnag_id 
        return redirect()->route('checkout.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(checkout $checkout)
    {
        //
    }
}
