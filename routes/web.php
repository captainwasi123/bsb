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
        Route::get('/product/fav/{id}', 'webController@favprod');
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
        Route::get('/membership/buyMU/{id}', 'userController@buyMembershipUser');
        Route::get('/membership/status', 'userController@memberStatus')->name('user.membership.memberStatus');

        Route::get('/whishlist/product', 'userController@whishlistProduct')->name('user.whishlist.whishlistProduct');
        Route::get('delete/{id}', 'userController@deleteWishlistProduct');

        Route::get('/whishlist/vendors', 'userController@whishlistVendors')->name('user.whishlist.whishlistVendors');

        Route::get('/setting/profile', 'userController@settingProfile')->name('user.setting.settingProfile');
        Route::post('/setting/profile', 'userController@settingProfileSubmit');
        Route::get('/setting/password', 'userController@settingPassword')->name('user.setting.settingPassword');
        Route::post('/setting/password', 'userController@settingPasswordSubmit');
        Route::post('become_a_vendor', 'userController@becomeVendor')->name('user.become_a_vendor');

    });

//User Dashboard
    Route::prefix('vendr')->namespace('vendor')->middleware('vendorAuth')->group(function(){


        Route::get('/', 'vendorController@index')->name('vendor.index');

        //Profile
            Route::prefix('profile')->group(function(){

                Route::get('basicInformation', 'vendorController@basicInfo')->name('vendor.profile.basicInfo');
                Route::post('basicInformation', 'vendorController@basicInfoSubmit');

                Route::get('security', 'vendorController@passSecurity')->name('vendor.profile.passSecurity');
                Route::post('security', 'vendorController@passSecuritySubmit');
            });

        //Products
            Route::prefix('product')->group(function(){

                Route::get('add', 'productController@addNewProduct')->name('vendor.product.addNewProduct');
                Route::post('add', 'productController@addNewProductSubmit');

                Route::get('all', 'productController@allProduct')->name('vendor.product.allProduct');
                Route::get('pending', 'productController@pendingProduct')->name('vendor.product.pendingProduct');
                Route::get('approve', 'productController@approveProduct')->name('vendor.product.approveProduct');
                Route::get('reject', 'productController@rejectProduct')->name('vendor.product.rejectProduct');

                Route::get('delete/{id}', 'productController@deleteProduct');
                Route::get('edit/{id}', 'productController@editProduct')->name('vendor.product.edit');
                Route::post('update', 'productController@updateProduct')->name('vendor.product.update');
            });

        Route::get('/virtual/plan', 'vendorController@memberPlan')->name('vendor.virtual.memberPlan');
        Route::get('/virtual/status', 'vendorController@memberStatus')->name('vendor.virtual.memberStatus');
    });



//Admin Dashboard
    Route::prefix('admin')->namespace('admin')->group(function(){

        Route::get('/login', 'authController@login')->name('admin.login');
        Route::post('/login', 'authController@loginSubmit');
        Route::get('/logout', 'authController@logout')->name('admin.logout');

        Route::middleware('adminAuth')->group(function(){

            Route::get('/', 'adminController@index')->name('admin.index');

            Route::prefix('vendor')->group(function(){
                Route::get('new', 'adminController@vendorNew')->name('admin.vendor.vendorNew');
                Route::get('featured', 'adminController@vendorFeatured')->name('admin.vendor.vendorFeatured');
                Route::get('active', 'adminController@vendorActive')->name('admin.vendor.vendorActive');
                Route::get('blocked', 'adminController@vendorBlocked')->name('admin.vendor.vendorBlocked');

                Route::get('changeStatus/{id}/{status}', 'adminController@changeStatus')->name('admin.vendor.changeStatus');
                Route::get('featureStatus/{id}/{status}', 'adminController@featureStatus')->name('admin.vendor.featureStatus');

            });

            Route::prefix('users')->group(function(){

                Route::get('all', 'userController@usersAll')->name('admin.users.usersAll');
                Route::get('blocked', 'userController@usersBlocked')->name('admin.users.usersBlocked');
                Route::get('premium', 'userController@usersPremium')->name('admin.users.usersPremium');

                Route::get('changeStatus/{id}/{status}', 'userController@changeStatus')->name('admin.users.changeStatus');
            });

            Route::prefix('product')->group(function(){

                Route::get('pending', 'productController@productPending')->name('admin.featured_product.productPending');
                Route::get('publish', 'productController@productPublish')->name('admin.featured_product.productPublish');
                Route::get('expired', 'productController@productExpired')->name('admin.featured_product.productExpired');
                Route::get('blocked', 'productController@productBlocked')->name('admin.featured_product.productBlocked');

                Route::get('changeStatus/{id}/{status}', 'productController@changeStatus')->name('admin.users.changeStatus');
            });

            Route::get('/setting/role', 'adminController@settingRole')->name('admin.setting.settingRole');

            Route::get('/member/pending', 'adminController@memberPending')->name('admin.featured_member.memberPending');
            Route::get('/member/publish', 'adminController@memberPublish')->name('admin.featured_member.memberPublish');
            Route::get('/member/expired', 'adminController@memberExpired')->name('admin.featured_member.memberExpired');
            Route::get('/member/blocked', 'adminController@memberBlocked')->name('admin.featured_member.memberBlocked');
            Route::get('/member/cancel', 'adminController@memberCancel')->name('admin.featured_member.memberCancel');
        });

    });

