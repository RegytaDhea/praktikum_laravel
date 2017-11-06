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

Route::get('/', function () { // / merupakan url home/halaman utama laravel
    return view('welcome');
});

Route::get('contact', function () { //aksesnya dg .../contact
    return view('contact');
});

Route::get('percakapan', function () { //urlnya /percakapan
    return view('percakapan');
});

Route::post('percakapan/kirim', function () {
    return view('percakapan_kirim');
});

Route::get('template', function () { //template nama urlnya (/template)
	return view('coba1');
});

Route::get('coba1', function () {
	return view('coba1');
});

Route::get('coba2', function () {
	return view('coba2');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); //kalo berhasil login masuk ke home
Route::post('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

/*Route::get('/admin', 'AdminController@index')->name('admin.dashboard'); //routing ke admin

Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login'); //route untuk admin login

Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit'); //routes untuk admin login submit
*/

Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});
