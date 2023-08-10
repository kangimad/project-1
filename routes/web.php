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

// Route::get('/', function () {
//     return view('data-puskesmas', [
//         'active' => 'puskesmas',
//         'title' => 'Puskesmas',
//         'puskesmas' => Puskesmas::all()
//     ]);
// });

Route::get('/', [PuskesmasController::class, 'index']);
Route::get('/puskesmas', [PuskesmasController::class, 'index']);
