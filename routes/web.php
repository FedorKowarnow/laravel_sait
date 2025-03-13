<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;



Route::get('/', function () {
    return '1111';
    //return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers\Category'], function () {
Route::get('/category',IndexController::class)->name('category.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Review'], function () {
    Route::get('/reviews',IndexController::class)->name('review.index');
    Route::get('/review/create',CreateController::class)->name('review.create')->middleware('auth');
    Route::post('/reviews',StoreController::class)->name('review.store')->middleware('auth');
    Route::get('/review/{review}',ShowController::class)->name('review.show');
    Route::get('/review/{review}/edit',EditController::class)->name('review.edit');
    Route::patch('/reviews/{review}',UpdateController::class)->name('review.update');
    Route::delete('/reviews/{review}',DestroyController::class)->name('review.destroy');
});


Route::get('/main', MainController::class)->name('main');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'App\Http\Controllers\User'], function () {
Route::patch('/home/{user}',UpdateController::class)->name('user.update');
});

Route::group(['namespace' => 'App\Http\Controllers\ReviewUserLike'], function () {
    Route::patch('/reviews2/{review2}',UpdateController::class)->name('reviewUserLike.update');
});