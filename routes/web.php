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


//Product-category
Route::get('/product-category/{category_id}', 'CategoryProduct@show_category_home');

//Product-detail
Route::get('/product-detail/{product_id}', 'ProductController@details_product');

//Back-end
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::get('/logout', 'AdminController@logout');
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

//Teacher
Route::get('/teacher', 'TeacherController@index');
Route::get('/add-teacher', 'TeacherController@add_teacher');
Route::get('/edit-teacher/{teacher_id}', 'TeacherController@edit_teacher');
Route::get('/delete-teacher/{teacher_id}', 'TeacherController@delete_teacher');

Route::get('/all-teacher', 'TeacherController@all_teacher');

Route::get('/unactive-teacher/{teacher_id}', 'TeacherController@unactive_teacher');
Route::get('/active-teacher/{teacher_id}', 'TeacherController@active_teacher');

Route::post('/save-teacher', 'TeacherController@save_teacher');
Route::post('/update-teacher/{teacher_id}', 'TeacherController@update_teacher');
