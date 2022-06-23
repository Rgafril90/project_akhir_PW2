<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    
public function index(){
        $result1 = DB::select("SELECT stocks.roti_id, rotis.nama_roti, rotis.rasa_roti, COUNT(*) as jumlah FROM stocks
         JOIN rotis ON stocks.roti_id = rotis.id GROUP BY stocks.roti_id, rotis.nama_roti, rotis.rasa_roti");
        return view('dashboardnew')->with('grafik1', $result1);
    }


    // public function index(){
    //     $result1 = DB::select("SELECT stocks.roti_id, rotis.nama_roti, rotis.rasa_roti,stocks.jumlah FROM stocks
    //     JOIN rotis ON stocks.roti_id = rotis.id GROUP BY stocks.roti_id, rotis.nama_roti, rotis.rasa_roti;");
    //     return view('dashboardnew')->with('grafik1', $result1);
    // }
}