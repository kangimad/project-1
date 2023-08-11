<?php

use App\Http\Controllers\PuskesmasController;
use App\Models\Puskesmas;
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

Route::get('/about-me', function () {
    return view('about-me', [
        'active' => 'about-me',
        'title' => 'About Me'
    ]);
});
Route::get('/rumah-sakit', function () {
    return view('rumah-sakit', [
        'active' => 'rumah-sakit',
        'title' => 'Rumah Sakit'
    ]);
});

Route::get('/', [PuskesmasController::class, 'index']);
Route::get('/puskesmas', [PuskesmasController::class, 'index']);
