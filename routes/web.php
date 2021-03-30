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

//Front-end Section

Route::namespace('Frontend')->group(function () {
    Route::get('/', 'IndexController@home')->name('home');
    Route::get('/about', 'IndexController@about')->name('about');
    Route::get('/course', 'IndexController@course')->name('course');
    Route::get('/post', 'IndexController@post')->name('post');
    Route::get('/shop', 'IndexController@shop')->name('shop');
    Route::get('/contact', 'IndexController@contact')->name('contact');
});

//End Front-end Section
Auth::routes();


Route::prefix('/admin')->namespace('Admin')->group(function(){
    // All the admin route will be defined here
    Route::match(['get', 'post'], '/', 'AdminController@login');
    Route::group(['middleware' => ['admin']], function () {
        Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard');
        Route::get('password', 'AdminController@password')->name('admin.password');
        Route::get('logout', 'AdminController@logout')->name('admin.logout');
        Route::post('check-current-pwd','AdminController@chkCurrentPassword');
        Route::post('update-current-pwd','AdminController@updateCurrentPassword');
        Route::match(['get', 'post'], 'settings', 'AdminController@settings');

        // Product Section
        Route::resource('product', 'ProductController');
        Route::resource('product_category', 'ProductCategoryController');

        // Course Section
        Route::resource('course', 'CourseController');
        Route::resource('course_category', 'CourseCategoryController');

        // Post Section
        Route::resource('post', 'PostController');
        Route::resource('post_category', 'PostCategoryController');

    });
});