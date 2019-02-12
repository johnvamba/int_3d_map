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
    return view('welcome');
})->name('front.site');

Route::group([
		'prefix' => 'admin',
		'middleware' => 'auth',
	], function(){
		Route::get('/', function(){
			return view('welcome');
		})->name('admin.index');

		Route::get('/something', function(){
			return view('welcome');
		})->name('admin.something');
});