<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BalanceController;
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
Route::post('register', [UserController::class, 'register'])->name('register.post');
Route::post('login', [UserController::class, 'loginUser'])->name('login.post');
Route::post('/loginadmin', [UserController::class, 'loginAdmin'])->name('login.admin');
Route::get('logout', [UserController::class, 'logout'])->name('logout.get');
route::post('/logout', [UserController::class, 'logoutUser'])->name('logout');

Route::get('/admindash', [AdminController::class, 'dashboard'])->name('admindash');

Route::get('/profileview', [UserController::class, 'profile'])->name('profileview');
Route::post('/balance', [BalanceController::class, 'topup'])->name('topup.post');
Route::get('/historytr', [BalanceController::class, 'getbalance'])->name('historytr');

Route::post('/category', [AdminController::class, 'createCategory'])->name('category.post');
Route::delete('/category/{id}', [AdminController::class, 'deleteCategory'])->name('category.delete');
Route::get('/category', [AdminController::class, 'showAllCategories'])->name('category');

Route::get('/', function () {
    return view('home');
});

Route::get('/admindash', function () {
    return view('admindash');
});

Route::get('/login', function () {
    return view('login');
});

// Route::get('/profileview', function () {
//     return view('profileview');
// });

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

Route::get('/detail-product2', function () {
    return view('detail-product2');
});

Route::get('/detail-product3', function () {
    return view('detail-product3');
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
