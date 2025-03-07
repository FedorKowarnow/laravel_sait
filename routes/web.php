<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;



Route::get('/', function () {
    return '1111';
    //return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers\Category'], function () {
Route::get('/Reviews',IndexController::class)->name('category.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Review'], function () {
    Route::get('/All_Reviews',IndexController::class)->name('review.index');
    Route::get('/Review/Create',CreateController::class)->name('review.create');
    Route::post('/reviews',StoreController::class)->name('review.store');
    Route::get('/Review/{review}',ShowController::class)->name('review.show');
    Route::get('/Review/{review}/Edit',EditController::class)->name('review.edit');
    Route::patch('/reviews/{review}',UpdateController::class)->name('review.update');
    Route::delete('/reviews/{review}',DestroyController::class)->name('review.destroy');
});


Route::get('/Main', MainController::class)->name('main');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'App\Http\Controllers\User'], function () {
Route::patch('/home/{user}',UpdateController::class)->name('user.update');
});