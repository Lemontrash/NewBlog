<?php

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

Route::get('/', 'PostController@show' )->name('home');


Route::get('/signIn', function () {
    return view('signIn');
})->name('signIn');

Route::get('/SingUp', function () {
    return view('SignUp');
})->name('signUp');

Route::get('/ContactUs', function () {
    return view('ContactUs');
})->name('ContactUs');

Route::get('/Post', function () {
    return view('SinglePost');
})->name('single');

Route::get('/Admin', function () {
    return view('admin.home');
})->name('admin');

Route::post('messages', 'MessageController@store')->name('message');

Route::post('signUp', 'SignUpController@store')->name('SignUp');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home2');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::post('login', '\App\Http\Controllers\Auth\LoginController@login')->name('login.post');

