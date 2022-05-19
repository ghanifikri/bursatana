<?php

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


// Landing Page (Role Guest)
Route::get('/', function () {
    return view('landingPage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});


//User Group Route
Route::prefix('user')->group(function () {

    Route::get('/dashboard', function () {
        return view('user.user_Dashboard', [
            "title" => "Dashboard",
        ]);
    });
    Route::get('/portofolio', function () {
        return view('user.user_Portofolio', [
            "title" => "Portofolio"
        ]);
    });
    Route::get('/order', function () {
        return view('user.user_Order', [
            "title" => "Order"
        ]);
    });
    Route::get('/penarikan', function () {
        return view('user.user_Penarikan', [
            "title" => "Penarikan"
        ]);
    });

});

//Admin Group Route
Route::prefix('admin')->group(function () {

    Route::get('viewuser', function () {
        return view('admin.manageUser', [
            "title" => "View User"
        ]);
    });
});

//GET Faq & About
Route::get('/faq', function () {
    return view('faq', [
        "title" => "FAQ (Frequently As Question)"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});


//=============================================



Route::get('/test', function () {
    return view('layouts/mainAdmin', [
        "title" => "About"
    ]);
});
