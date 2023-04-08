<?php

use App\Http\Controllers\CategoryController;
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

Route::resource("noticias", NewsController::class)
    ->names("news")
    ->parameters(["noticias" => "news"]);

Route::resource("categorias", CategoryController::class)
    ->names("category")
    ->parameters(["categorias" => "category"]);
