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

        Route::get('/membership/plan', 'userController@memberPlan')->name('user.membership.memberPlan');
        Route::get('/membership/status', 'userController@memberStatus')->name('user.membership.memberStatus');

        Route::get('/whishlist/product', 'userController@whishlistProduct')->name('user.whishlist.whishlistProduct');
        Route::get('/whishlist/vendors', 'userController@whishlistVendors')->name('user.whishlist.whishlistVendors');

        Route::get('/setting/profile', 'userController@settingProfile')->name('user.setting.settingProfile');
        Route::get('/setting/password', 'userController@settingPassword')->name('user.setting.settingPassword');

    });

//User Dashboard
    Route::prefix('vendr')->namespace('vendor')->middleware('vendorAuth')->group(function(){


        Route::get('/', 'vendorController@index')->name('vendor.index');

        //Profile
            Route::prefix('profile')->group(function(){
                
                Route::get('basicInformation', 'vendorController@basicInfo')->name('vendor.profile.basicInfo');
                Route::post('basicInformation', 'vendorController@basicInfoSubmit');

                Route::get('security', 'vendorController@passSecurity')->name('vendor.profile.passSecurity');
            });

        Route::get('/product/add', 'vendorController@addNewProduct')->name('vendor.product.addNewProduct');
        Route::get('/product/all', 'vendorController@allProduct')->name('vendor.product.allProduct');
        Route::get('/product/pending', 'vendorController@pendingProduct')->name('vendor.product.pendingProduct');
        Route::get('/product/approve', 'vendorController@approveProduct')->name('vendor.product.approveProduct');
        Route::get('/product/reject', 'vendorController@rejectProduct')->name('vendor.product.rejectProduct');
        Route::get('/virtual/plan', 'vendorController@memberPlan')->name('vendor.virtual.memberPlan');
        Route::get('/virtual/status', 'vendorController@memberStatus')->name('vendor.virtual.memberStatus');
    });



//Admin Dashboard
    Route::prefix('admin')->namespace('admin')->group(function(){

        Route::get('/', 'adminController@index')->name('admin.dashboard')->name('admin.index');

        Route::get('/vendor/new', 'adminController@vendorNew')->name('admin.vendor.vendorNew');
        Route::get('/vendor/featured', 'adminController@vendorFeatured')->name('admin.vendor.vendorFeatured');
        Route::get('/vendor/active', 'adminController@vendorActive')->name('admin.vendor.vendorActive');
        Route::get('/vendor/blocked', 'adminController@vendorBlocked')->name('admin.vendor.vendorBlocked');

        Route::get('/users/all', 'adminController@usersAll')->name('admin.users.usersAll');
        Route::get('/users/blocked', 'adminController@usersBlocked')->name('admin.users.usersBlocked');
        Route::get('/users/premium', 'adminController@usersPremium')->name('admin.users.usersPremium');

        Route::get('/setting/role', 'adminController@settingRole')->name('admin.setting.settingRole');

        Route::get('/product/pending', 'adminController@productPending')->name('admin.featured_product.productPending');
        Route::get('/product/publish', 'adminController@productPublish')->name('admin.featured_product.productPublish');
        Route::get('/product/expired', 'adminController@productExpired')->name('admin.featured_product.productExpired');
        Route::get('/product/blocked', 'adminController@productBlocked')->name('admin.featured_product.productBlocked');

        Route::get('/member/pending', 'adminController@memberPending')->name('admin.featured_member.memberPending');
        Route::get('/member/publish', 'adminController@memberPublish')->name('admin.featured_member.memberPublish');
        Route::get('/member/expired', 'adminController@memberExpired')->name('admin.featured_member.memberExpired');
        Route::get('/member/blocked', 'adminController@memberBlocked')->name('admin.featured_member.memberBlocked');
        Route::get('/member/cancel', 'adminController@memberCancel')->name('admin.featured_member.memberCancel');

    });

