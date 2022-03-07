<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller1;

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

// "utk /tes terserah,, nama folder tmbh titik nama file, tidak disertakan blade dan php"
Route::get('/tes', function () {
    return view('posts.post-1');
});

// Route di ambil dari dokumentasi laravel
Route::get('/pindah-p2', [Controller1::class, 'posts2']);

Route::get('/pindah-p3', [Controller1::class, 'posts3']);

Route::post('/save', [Controller1::class, 'saveData']);

Route::get('/database', [Controller1::class, 'viewDB']);
