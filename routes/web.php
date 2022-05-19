<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\AnimeListController;
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

Route::prefix('/anime')->group(function() {
    Route::get('/list', [AnimeListController::class, 'index'])->name('site.list');
});

Route::get('/anime/{name}/{score}/{watchTimes?}', function($name, $score, $watchTimes = '1') {
    return redirect(to:'/anime');
    echo "name: $name | score: $score | watchTimes: $watchTimes";
})->where('name','[A-Za-z]+')->where('score', '[0-9]+');

Route::fallback(function () {
    echo 'this page its not found <a href="'.route('site.index').'"> return </a>';
});

