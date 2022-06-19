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

Route::group(['middleware' => 'verify.shopify'], function () {
	
	Route::get('/', function () { return view('dashboard'); })->name('home');
    Route::get('/activity', function () { return view('activity'); })->name('activity');
    Route::get('/customers', function () { return view('customer'); })->name('customers');
    Route::get('/products', function () { return view('product'); })->name('products');
    Route::get('/settings', function () { return view('setting'); })->name('settings');
    Route::get('/support', function () { return view('support'); })->name('support');
    Route::get('/help', function () { return view('help'); })->name('help');
	
});

/* 
|| Your app proxy data will be comming from below controller. make sure use 'auth.proxy' middleware.
*/
Route::any('/proxy', 'AppProxyController@index')->middleware('auth.proxy');