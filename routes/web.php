<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EditorController;

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

/**page accueil blog */ 
Route::get('/articles',[BlogController::class,'index'])->name('blog.accueil');


/** detail blog */
Route::get('/voir-plus/{id}',[BlogController::class,'detail'])->name('blog.detail');

/**Ck editor */

Route::get('/create',[BlogController::class,"create"])->name('blog.editor');

Route::post('/store',[BlogController::class,"store"])->name('blog.ajout');

