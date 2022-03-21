<?php

use App\Http\Controllers\AkuController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [AkuController::class, 'index']);

Route::post('/saveBarang', [AkuController::class, 'tambah']);

Route::get('/tampilan', [AkuController::class, 'nampil']);

Route::get('/getdata', [AkuController::class, 'get']);

Route::get('/hapusdata/{id}', [AkuController::class, 'hapus']);

Route::get('/editdata/{id}', [AkuController::class, 'edit_data']);

Route::get('/edit-fetch/{id}', [AkuController::class, 'fetch']);

Route::get('/edit-submit', [AkuController::class, 'submit']);
