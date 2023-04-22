<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ImagenController;
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
    return view('login');
});

/*        routes registration          */

Route::get('/registro', [RegisterController::class, 'index']);
Route::post('/registro', [RegisterController::class, 'store']);



/*        routes login          */

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

/*        routes muro        */

Route::get('/muro', [PostController::class, 'index'])->name('post.index');  
Route::post('/salir', [LogoutController::class, 'store'])->name('logout');


Route::get('/{user:username}' , [PostController::class, 'index'])->name('post.index');
Route::get('muro/create' , [PostController::class, 'create'])->name('post.create');


/*     routes images for post      */

Route::post('/imagenes', [ImagenController::class, 'store'])->name('imagenes.store');

Route::post('/post', [PostController::class, 'store'])->name('post.store');

/*     routes of take of shows and post that i  have in memory and show in ...      */
Route::get('/{user:username}/post/{post}', [PostController::class, 'show'])->name('post.show');