
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

Route::get('/', function () {
    return view('layouts.home_page');
})->name('welcome');

Route::get('/cart',function(){
    return view('cart');
})->name('cart');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', function(){
    return view('cart');
});
