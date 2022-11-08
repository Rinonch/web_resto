<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesananController;

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

Route::get('/pesanan',[PesananController::class,'index']);
Route::post('/store',[PesananController::class,'store']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/room',function() {
    return view('/cf_room');
});

Route::get('/quality', function () {
    return view('/quality');
});

Route::get('/order', function () {
    return view('/order');
});

Route::get('/chat', function () {
    return view('/chat');
});

Route::middleware(['auth'])->group(function(){

    Route::get('/welcome', function () {
        return view('welcome');
    });
    
    Route::get('/about', function () {
        return view('/about');
    });
    
    Route::get('/service', function () {
        return view('/service');
    });
    
    Route::get('/menu', function () {
        return view('/menu');
    });
    
    Route::get('/reservasi', function() {
        return view('/reservasi');
    });
    
    Route::get('/testimoni', function() {
        return view('/testimoni');
    });
    
    Route::get('/wedding', function() {
        return view('/wedding');
    });
    
    Route::get('/party', function() {
        return view('/party');
    });
    
    Route::get('/meeting', function() {
        return view('/meeting');
    });
    
    
});