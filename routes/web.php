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

//Category Post
Route::get('/add-category-post', 'CategoryPost@add_category_post');
Route::get('/edit-category-post/{category_post_id}', 'CategoryPost@edit_category_post');
Route::get('/delete-category-post/{category_post_id}', 'CategoryPost@delete_category_post');
Route::get('/all-category-post', 'CategoryPost@all_category_post');

Route::get('/unactive-category-post/{category_post_id}', 'CategoryPost@unactive_category_post');
Route::get('/active-category-post/{category_post_id}', 'CategoryPost@active_category_post');

Route::post('/save-category-post', 'CategoryPost@save_category_post');
Route::post('/update-category-post/{category_post_id}', 'CategoryPost@update_category_post');

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

Route::get('/admin', 'AuthController@admin');
Route::get('/logout-auth', 'AuthController@logout_auth');

Route::get('/add-auth', 'AuthController@add_auth');
Route::get('/edit-auth/{admin_id}', 'AuthController@edit_auth');
Route::get('/delete-auth/{admin_id}', 'AuthController@delete_auth');
Route::get('/all-auth', 'AuthController@all_auth');

Route::post('/save-auth', 'AuthController@save_auth');
Route::post('/update-auth/{admin_id}', 'AuthController@update_auth');

Route::post('/register', 'AuthController@register');
Route::post('/login-auth', 'AuthController@login_auth');



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
Route::get('/course-detail/{course_slug}', 'CourseController@details_course');

//Chapter
Route::get('/add-chapter', 'ChapterController@add_chapter');



//Post
Route::get('/post-detail', 'PostController@details_post');


//Gallery
Route::get('/add-gallery/{product_id}', 'GalleryController@add_gallery');
Route::post('/select-gallery', 'GalleryController@select_gallery');
Route::post('/insert-gallery/{pro_id}', 'GalleryController@insert_gallery');


//Slider
Route::get('/add-slider', 'SliderController@add_slider');
Route::get('/edit-slider/{slider_id}', 'SliderController@edit_slider');
Route::get('/delete-slider/{slider_id}', 'SliderController@delete_slider');
Route::get('/all-slider', 'SliderController@all_slider');

Route::get('/unactive-slider/{slider_id}', 'SliderController@unactive_slider');
Route::get('/active-slider/{slider_id}', 'SliderController@active_slider');

Route::post('/save-slider', 'SliderController@save_slider');
Route::post('/update-slider/{slider_id}', 'SliderController@update_slider');


//Coupon
Route::get('/add-coupon', 'CouponController@add_coupon');
Route::get('/edit-coupon/{coupon_id}', 'CouponController@edit_coupon');
Route::get('/delete-coupon/{coupon_id}', 'CouponController@delete_coupon');
Route::get('/all-coupon', 'CouponController@all_coupon');

Route::get('/unactive-coupon/{coupon_id}', 'CouponController@unactive_coupon');
Route::get('/active-coupon/{coupon_id}', 'CouponController@active_coupon');

Route::post('/save-coupon', 'CouponController@save_coupon');
Route::post('/update-coupon/{coupon_id}', 'CouponController@update_coupon');
