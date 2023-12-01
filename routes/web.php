<?php


// use App\Http\Controllers\BlogController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
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

// Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/', [HomeController::class, 'utama']);
Route::get('/register', [AuthController::class, 'register']);

Route::get('/welcome', [AuthController::class, 'welcome']);

Route::get('/master', function(){
    return view('layout.master');
});

Route::get('/table', function(){
    return view('halaman.table');
});

Route::get('/data-table', function(){
    return view('halaman.data-table');
});



Route::middleware(['auth'])->group(function () {
   // CRUD cast
//  create
// form tambah cast
Route::get('/cast', [CastController::class, 'index']);
Route::get('/cast/create', [CastController::class, 'create']);
Route::POST('/cast', [CastController::class, 'store']);
Route::get('/cast/{cast_id}', [CastController::class, 'show']);
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);
Route::PUT('/cast/{cast_id}', [CastController::class, 'update']);
Route::DELETE('/cast/{cast_id}', [CastController::class, 'destroy']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// CRUD CAST
Route::resource('post', CastController::class);
Auth::routes();