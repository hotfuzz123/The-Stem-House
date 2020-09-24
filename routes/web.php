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

//Front-end
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/shop', 'HomeController@shop');
Route::get('/contact', 'HomeController@contact');
Route::get('/course', 'HomeController@course');
Route::get('/post', 'HomeController@post');



//Back-end
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::post('/admin-dashboard', 'AdminController@dashboard');

//Category Product
Route::get('/add-category-product', 'CategoryProduct@add_category_product');
Route::get('/edit-category-product/{category_product_id}', 'CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}', 'CategoryProduct@delete_category_product');
Route::get('/all-category-product', 'CategoryProduct@all_category_product');

Route::get('/unactive-category-product/{category_product_id}', 'CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}', 'CategoryProduct@active_category_product');

Route::post('/save-category-product', 'CategoryProduct@save_category_product');
Route::post('/update-category-product/{category_product_id}', 'CategoryProduct@update_category_product');

//Category News

//Category Course
Route::get('/add-category-course', 'Categorycourse@add_category_course');
Route::get('/edit-category-course/{category_course_id}', 'Categorycourse@edit_category_course');
Route::get('/delete-category-course/{category_course_id}', 'Categorycourse@delete_category_course');
Route::get('/all-category-course', 'Categorycourse@all_category_course');

Route::get('/unactive-category-course/{category_course_id}', 'Categorycourse@unactive_category_course');
Route::get('/active-category-course/{category_course_id}', 'Categorycourse@active_category_course');

Route::post('/save-category-course', 'Categorycourse@save_category_course');
Route::post('/update-category-course/{category_course_id}', 'Categorycourse@update_category_course');

//Product
Route::get('/add-product', 'ProductController@add_product');
Route::get('/edit-product/{product_id}', 'ProductController@edit_product');
Route::get('/delete-product/{product_id}', 'ProductController@delete_product');
Route::get('/all-product', 'ProductController@all_product');

Route::get('/unactive-product/{product_id}', 'ProductController@unactive_product');
Route::get('/active-product/{product_id}', 'ProductController@active_product');

Route::post('/save-product', 'ProductController@save_product');
Route::post('/update-product/{product_id}', 'ProductController@update_product');

//Product-category
Route::get('/product-category/{slug_category_product}', 'CategoryProduct@show_category_home');

//Product-detail
Route::get('/product-detail/{product_slug}', 'ProductController@details_product');


//Authentication roles
Route::get('/register-auth', 'AuthController@register_auth');
Route::get('/admin', 'AuthController@admin');
Route::get('/logout-auth', 'AuthController@logout_auth');

Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');



//Course
Route::get('/add-course', 'CourseController@add_course');
Route::get('/edit-course/{course_id}', 'CourseController@edit_course');
Route::get('/delete-course/{course_id}', 'CourseController@delete_course');
Route::get('/all-course', 'CourseController@all_course');

Route::get('/unactive-course/{course_id}', 'CourseController@unactive_course');
Route::get('/active-course/{course_id}', 'CourseController@active_course');

Route::post('/save-course', 'CourseController@save_course');
Route::post('/update-course/{course_id}', 'CourseController@update_course');

//Product-category
Route::get('/course-category/{slug_category_course}', 'Categorycourse@show_category_home');

//course-detail
Route::get('/course-detail', 'CourseController@details_course');



//Post

Route::get('/post-detail', 'PostController@details_post');
