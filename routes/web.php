<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SiteController;
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
Route::middleware('auth')->group(function() {

    Route::prefix('admin')->group(function() {

        Route::get('', function() {
            return redirect()->route('news.index');
        });

        Route::resource("noticias", NewsController::class)
            ->names("news")
            ->parameters(["noticias" => "news"]);

        Route::delete('noticias/{news}', [NewsController::class, 'destroy'])
            ->name('news.destroy')
            ->middleware('can:excluir-noticias');

        Route::resource("categorias", CategoryController::class)
            ->names("category")
            ->parameters(["categorias" => "category"]);

    });

});

Route::get('/', [SiteController::class, 'home']);
Route::get('/noticias/{news}', [SiteController::class, 'read'])->name('newsRead');
Route::get('/noticias', [SiteController::class, 'news'])->name('newsIndex');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
