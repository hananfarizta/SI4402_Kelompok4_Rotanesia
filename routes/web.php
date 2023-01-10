<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// user route
// Route::get('/register', [UserController::class, 'index'])->name('register.get');
Route::post('register', [UserController::class, 'register'])->name('register.post');
Route::get('login', [UserController::class, 'login'])->name('login.get');
Route::post('login', [UserController::class, 'loginUser'])->name('login.post');
Route::get('logout', [UserController::class, 'logout'])->name('logout.get');
route::post('/logout', [UserController::class, 'logoutUser']);


Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/best-seller', function () {
    return view('best-seller');
});

Route::get('/edit-profile', function () {
    return view('edit-profile');
});

Route::get('/detail-product', function () {
    return view('detail-product');
});

Route::get('/direct-succes', function () {
    return view('direct-succes');
});

Route::get('/status-order', function () {
    return view('status-order');
});


Route::get('/about-us', function () {
    return view('about-us');
});

Route::group(
    ['middleware' => ['auth', 'roles:ADMIN']], function(){
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });