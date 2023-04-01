<?php

use App\Http\Controllers\NewsController;
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

Route::get('/noticias', [NewsController::class, "index"])->name("news.index");
Route::get('/noticias/nova', [NewsController::class, "create"])->name("news.create");
Route::post('/noticias/nova', [NewsController::class, "store"])->name("news.store");
