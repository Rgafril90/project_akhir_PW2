<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

    Route::get('/', function () {
        return view('belanja.index');
        });

    Route::get('/tentang', function () {
        return view('tentang.index');
        
        });

        Route::resource('stock', StockController::class );


    Route::get('/keranjang', function () {
        return view('keranjang.index');
            
        });

    Route::get('/contactus', function () {
        return view('contactus.index');
                
        });
    Route::get('/checkout', function () {
        return view('checkout.index');
                    
        });

