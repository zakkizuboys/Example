<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('/coba', function () {
//     return view('per1');
// });

// Route::get('/isi', function () {
//     return view('isi');
// });


// Route::get('tes', function () {
//     return '<h1>Ini halaman tes</h1>';
// });

// Route::get('uji', function () {
//     return view('uji');
// });

// Route::get('/post', [PostController::class, 'index']);
// Route::get('/post', [PostController::class, 'create']);


// Route::get('/tabel', function () {
//     return view('tabel');
// });

Route::resource('post', PostController::class)->only('index', 'store', 'create', 'edit');

Route::post('post/{data}', [PostController::class, 'update']);
Route::get('hapuspost/{data}', [PostController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
