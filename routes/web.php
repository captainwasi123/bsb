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

//Website
    Route::namespace('web')->group(function(){

        Route::get('/', 'webController@index')->name('web.index');
        Route::get('about', 'webController@about')->name('web.about');
        Route::get('categories', 'webController@categories')->name('web.categories');
        Route::get('category/{id}/{name}', 'webController@category')->name('web.category');
        Route::get('physicalBox', 'webController@physicalBox')->name('web.physical_box');


        Route::get('login', 'webController@login')->name('web.login');
        Route::get('logout', 'webController@logout')->name('web.logout');
        Route::get('register', 'webController@register')->name('web.register');

        Route::post('login', 'webController@loginSubmit');
        Route::post('register', 'webController@registerSubmit');
    });




//User Dashboard
    Route::prefix('user')->namespace('user')->middleware('userAuth')->group(function(){

        Route::get('/', 'userController@index')->name('user.dashboard');
    });