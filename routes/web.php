<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('screens.user.home');
})->name('home');
Route::get('/sign-up', function () {
    return view('screens.auth.signup');
})->name('signup');
Route::get('/sign-in', function () {
    return view('screens.auth.signin');
})->name('signin');
Route::get('/forget-password', function () {
    return view('screens.auth.forget');

})->name('forget');
Route::get('/verify-code', function () {
    return view('screens.auth.verification');

});
Route::get('/new-password', function () {
    return view('screens.auth.new-password');

});
Route::get('/offer', function () {
    return view('screens.user.offer');

})->name('offers');
Route::get('/contact-us', function () {
    return view('screens.user.contact');

})->name('contact-us');
Route::get('/about-us', function () {
    return view('screens.user.about');

})->name('about-us');
Route::get('/our-team', function () {
    return view('screens.user.teams');

})->name('our-team');
Route::get('/edit-profile', function () {
    return view('screens.auth.edit-profile');

});
Route::get('/update-password', function () {
    return view('screens.auth.update-password');

});
Route::get('/notification', function () {
    return view('screens.user.notification-view');

})->name('notification-view');
Route::get('/home-2', function () {
    return view('screens.new.home');

});




