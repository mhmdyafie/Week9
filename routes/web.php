<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function(){
    return view('salam',[
        "nama" => "Muhamad Yafie Akmal",
        "umur" => 19
    ]);
});
Route::get('/nilai', function () {
    return view('nilai');
});
Route::get('/tugasform',function(){
    return view('tugasform',[
        "nama"=>"Muhamad Yafie Akmal",
        "tanggal_pemeriksaan"=>"5 April 2023",
        "umur"=>19,
        "jenis_kelamin"=>"laki-laki"
    ]);
});
Route::get('/formulir8', function () {
    return view('formulir8');
});

Route::get('/form',[FormController::class,'index']);
Route::post('/hasil',[FormController::class,'hasil']);

// admin
Route::prefix('admin')->group(function(){
    Route::get('/dashboard',[DashboardController::class,'index']);
    Route::get('/produk',[ProdukController::class,'index']);
});
