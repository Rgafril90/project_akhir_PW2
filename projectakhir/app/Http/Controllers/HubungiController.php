<?php

namespace App\Http\Controllers;

use App\Models\hubungi;
use Illuminate\Http\Request;

class HubungiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hubungi = hubungi::all();
        return view('hubungi.index')->with('hubungi',$hubungi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $hubungi = hubungi::all();
        // return view('hubungi.index')->with('hubungi',$hubungi);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate input data kosong
        $validateData = $request->validate([
            'nama'=>'required',
            'email'=>'required',
            'noHp' => 'required',
            'komentar' => 'required'
        ]);

        //simpan
        $hubungi = new hubungi();
        $hubungi -> nama = $validateData['nama'];
        $hubungi -> email = $validateData['email'];
        $hubungi -> noHp = $validateData['noHp'];
        $hubungi -> komentar = $validateData['komentar'];

        $hubungi->save();
        return redirect()->route('hubungi.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hubungi  $hubungi
     * @return \Illuminate\Http\Response
     */
    public function show(hubungi $hubungi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hubungi  $hubungi
     * @return \Illuminate\Http\Response
     */
    public function edit(hubungi $hubungi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hubungi  $hubungi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hubungi $hubungi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hubungi  $hubungi
     * @return \Illuminate\Http\Response
     */
    public function destroy(hubungi $hubungi)
    {
        //
    }
}
