<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use Inertia\Inertia;



Route::get('/', function () {
    return Inertia::render('Homo');
})->name('homo');

//Category (на реакт)
Route::group(['namespace' => 'App\Http\Controllers\Category'], function () {
Route::get('/category',IndexController::class)->name('category.index');
});

//Review
Route::group(['namespace' => 'App\Http\Controllers\Review'], function () {
    Route::get('/reviews',IndexController::class)->name('review.index'); // На реакт
    Route::get('/review/create',CreateController::class)->name('review.create')->middleware('auth');
    Route::post('/reviews',StoreController::class)->name('review.store')->middleware('auth');
    Route::get('/review/{review}',ShowController::class)->name('review.show');
    Route::get('/review/{review}/edit',EditController::class)->name('review.edit');
    Route::patch('/reviews/{review}',UpdateController::class)->name('review.update');
    Route::delete('/reviews/{review}',DestroyController::class)->name('review.destroy');
});

//Review Comment
Route::group(['namespace' => 'App\Http\Controllers\ReviewUserComment'], function () {
    Route::post('/review/{review}/reviewUserComments',StoreController::class)->name('review.reviewUserComment.store')->middleware('auth');
    Route::delete('/reviewUserComments/{reviewUserComment}',DestroyController::class)->name('reviewUserComment.destroy');
});


//Main page (на реакт)
Route::get('/main', MainController::class)->name('main');

//Standart UserPage
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//My logout
Route::post('/home/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('exit');

//UserPage
Route::group(['namespace' => 'App\Http\Controllers\User'], function () {
Route::patch('/home/{user}',UpdateController::class)->name('user.update');
});

//Add Like For Review
Route::group(['namespace' => 'App\Http\Controllers\ReviewUserLike'], function () {
    Route::post('/review/{review}/reviewUserLike',StoreController::class)->name('review.reviewUserLike.store')->middleware('auth');
});

//Add Like For Comment
Route::group(['namespace' => 'App\Http\Controllers\CommentUserLike'], function () {
    Route::post('/reviewUserComments/{reviewUserComment}/commentUserLike',StoreController::class)->name('reviewUserComment.commentUserLike.store')->middleware('auth');
});


