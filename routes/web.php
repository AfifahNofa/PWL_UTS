<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\OKIController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/tes', function () {
    echo Hash::make('1') . "<br>";
    echo Hash::make('1') . "<br>";
    echo Hash::make('1') . "<br>";
});
Route::middleware(['auth'])->group(function () {
    Route::resource('/jurusan', JurusanController::class);
    Route::resource('/fasilitas', FasilitasController::class);
    Route::resource('/oki', OKIController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
});