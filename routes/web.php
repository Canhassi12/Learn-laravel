<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\AnimeListController;
use App\Http\Middleware\Authenticate;
use GuzzleHttp\Middleware;
use Illuminate\Cache\RedisTaggedCache;

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
    return redirect(to:'/anime');
});

Route::get('/anime', [AnimeController::class, 'index'])->name('site.index');
    
Route::middleware('throttle:manyRequest', 'putToken')->post('/anime', [AnimeController::class, 'store'])->middleware('resetToken')->name('anime.store');

Route::prefix('/anime')->group(function () {
    Route::get('/edit/{anime}', [AnimeController::class, 'edit'])->name('anime.edit'); 
    Route::middleware('throttle:manyRequest')->put('/update/{anime}', [AnimeController::class, 'update'])->name('anime.update'); 
    Route::delete('/delete/{anime}', [AnimeController::class, 'destroy'])->name('anime.delete');
});  

Route::fallback(function () {
    echo 'this page its not found <a href="'.route('site.index').'"> return </a>';
});


