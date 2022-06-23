<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
use App\Http\Controllers\HubungiController;
use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\CheckoutController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboardnew');
// })->middleware(['auth'])->name('dashboard');

Route::resource('dashboard', DashboardController::class)->middleware(['auth']);

Route::resource('stock', StockController::class )->middleware(['auth']);

Route::resource('hubungi', HubungiController::class );

Route::resource('belanja', BelanjaController::class);

Route::resource('checkout', CheckoutController::class);

Route::get('/tentang', function () {
    return view('tentang.index');
    
    });
    
Route::resource('keranjang', KeranjangController::class);

require __DIR__.'/auth.php';
