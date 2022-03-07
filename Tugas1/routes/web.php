<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controllertugas;

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

Route::get('/tugas_satu', function () {
    return view('posts.tugas1');
});

// Route::get('/login_register', function () {
//     return view('logins.login');
// });

//login
Route::get('/login', [Controllertugas::class, 'login']);

Route::post('/tugas_dua', function () {
    return view('posts.tugas2');
});

Route::get('/tayang', [Controllertugas::class, 'tayang']);

Route::get('/tayang2', [Controllertugas::class, 'tayang2']);

Route::get('/tayang3', [Controllertugas::class, 'tayang3']);

Route::get('/tayang4', [Controllertugas::class, 'tayang4']);

Route::get('/tayang5', [Controllertugas::class, 'tayang5']);

Route::get('/tayang6', [Controllertugas::class, 'tayang6']);

Route::get('/tayang7', [Controllertugas::class, 'tayang7']);

Route::get('/tayang8', [Controllertugas::class, 'tayang8']);

Route::get('/tayang9', [Controllertugas::class, 'tayang9']);

Route::get('/tayang10', [Controllertugas::class, 'tayang10']);
