<?php

namespace App\Http\Controllers;

use App\Models\belanja;
use App\Models\stock;
use Illuminate\Http\Request;

class BelanjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $belanja = belanja::all();
        return view('belanja.index')->with('belanja',$belanja);

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\belanja  $belanja
     * @return \Illuminate\Http\Response
     */
    public function show(belanja $belanja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\belanja  $belanja
     * @return \Illuminate\Http\Response
     */
    public function edit(belanja $belanja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\belanja  $belanja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, belanja $belanja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\belanja  $belanja
     * @return \Illuminate\Http\Response
     */
    public function destroy(belanja $belanja)
    {
        //
    }
}
