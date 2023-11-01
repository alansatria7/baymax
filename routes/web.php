<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;

use App\Http\Controllers\GuruController;
use App\Http\Controllers\ProfileController;

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
// Route::get('/reviews', 'ReviewController@index')->name('reviews.ulasan');
// Route::post('/reviews', 'ReviewController@store')->name('reviews.store');
// Route::get('/reviews/create', 'ReviewController@create')->name('reviews.create');

// Route::get('/review/create', 'ReviewController@create')->name('review.create');
// Route::post('/review', 'ReviewController@store')->name('review.show');

// Route::get('/review/create', 'ReviewController@create')->name('review.create')->middleware('auth');
// Route::post('/review', 'ReviewController@store')->name('review.show')->middleware('auth');


// Route::get('/reviews/{id}', 'ReviewController@show')->name('reviews.show');
// Route::get('/reviews/{id}/edit', 'ReviewController@edit')->name('reviews.edit');
// Route::put('/reviews/{id}', 'ReviewController@update')->name('reviews.update');
// Route::delete('/reviews/{id}', 'ReviewController@destroy')->name('reviews.destroy');




Route::get('/', function () {
    return view('welcome');
});

Route::get('/outdaftar', function () {
    return view('outdaftar');
});

Route::get('/lesdaftar', function () {
    return view('lesdaftar');
});


Route::get('/bayar', function () {
    return view('bayar');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/detailguru', function () {
    return view('detailguru');
});

Route::get('/daftar', function () {
    return view('daftar');
});

// Route::get('/footer', function () {
//     return view('nav.footer');
// });

Route::get('/listteacher', function () {
    return view('listteacher');
});

Route::get('/register', function () {
    return view('register/all');
});

Route::get('/login', function () {
    return view('login/all');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/chat', function () {
    return view('chat');
});



route::get('/listteacher', [GuruController::class, 'index']);
Route::get('/detailguru/{guru}', [GuruController::class, 'show'])->name('detailguru.show');
// route::get('/detailguru/{id}', [GuruController::class, 'show'])->name('listteacher.show');
// Route::get('/detailguru', [DetailController::class, 'index']);
// Route::get('/detailguru2', [Detail_2Controller::class, 'index']);
// Route::get('/detailguru3', [Detail_3Controller::class, 'index']);
// Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
// Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

Route::get('authenticated', [AuthenticationController::class, 'authenticated']);
// Route::get('login', [AuthenticationController::class, 'login'])->name('login');
Route::post('login', [AuthenticationController::class, 'login'])->name('login'  );
Route::post('logout', [AuthenticationController::class, 'logout'])->name('logout');
Route::post('register', [AuthenticationController::class, 'register'])->name('register');
Route::get('authenticated', [AuthenticationController::class, 'authenticated']);

Route::get('/listteacher', [GuruController::class, 'index']);
Route::get('/listteacher/{id}', [GuruController::class, 'show'])->name('listteacher.show');



// Route::get('/bayar',[bayarController::class, 'bayar']);

Route::prefix('profile')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('profile');
    Route::get('/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/{id}', [ProfileController::class, 'update'])->name('profile.update');
});


