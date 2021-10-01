<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CalcController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\DBController;

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

Route::get('/', [MainController::class, 'Main']);

Route::get('/main', [MainController::class, 'Main'])->name('main');

Route::get('/choise', function () {
    return view('choise');
})->name('choise');

Route::get('/clean', function () {
    session()->forget('session-data');
    session()->put('session-data', array());
    return redirect()->route('main');
})->name('Clean');

Route::post('/reviews', [ReviewsController::class,'AddReview']);
Route::get('/reviews', [ReviewsController::class,'Reviews'])->name('reviews');

Route::post('/wedding', [CalcController::class,'Wedding']);
Route::get('/wedding', function () {
    return view('wedding');
})->name('wedding');

Route::post('/music_clip', [CalcController::class,'Music_clip']);
Route::get('/music_clip', function () {
    return view('music_clip');
})->name('music_clip');

Route::post('/interview', [CalcController::class,'Interview']);
Route::get('/interview', function () {
    return view('interview');
})->name('interview');

Route::post('/photosession', [CalcController::class,'Photosession']);
Route::get('/photosession', function () {
    return view('photosession');
})->name('photosession');

Route::post('/animation', [CalcController::class,'Animation']);
Route::get('/animation', function () {
    return view('animation');
})->name('animation');


Route::get('/price', function () {
    return view('price');
});

Route::get('/logout',[DBController::class,'Logout']);

Route::get('/adminlogout',[DBController::class,'Adminlogout']);

Route::post('/login', [DBController::class,'CreateUser']);
Route::get('/login', function () {
    return view('login', ['login' => 0]);
});

Route::post('/signin', [DBController::class,'Signin']);
Route::get('/signin', function () {
    return view('signin');
});

Route::post('/adminsignin', [DBController::class,'Adminsignin']);
Route::get('/adminsignin', function () {
    return view('adminsignin');
});

Route::get('/adminpanel',[DBController::class,'Adminpanel']);
Route::get('/moderpanel',[DBController::class,'Moderpanel']);

Route::get('/reviews_editor/{id}', [ReviewsController::class,'EditReview']);
Route::get('/reviews_editor/{id}/delete', [ReviewsController::class,'DeleteReview']);
Route::post('/reviews_editor/{id}', [ReviewsController::class,'EditReviewResult']);

Route::post('/moders_editor', [DBController::class,'CreateModerator']);
Route::get('/moders_editor', [DBController::class,'ModeratorEditor'])->name('moders_editor');
Route::get('/moders_editor/{nickname}/delete', [DBController::class,'DeleteModerator']);

Route::get('/individual', function () {
    return view('individual');
});
