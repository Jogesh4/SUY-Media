<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('welcome');

Route::view('/adminlogin', 'admin/adminlogin')->name('adminlogin');
Route::post('/adminauth', 'App\Http\Controllers\Admin\DashboardController@adminauth')->name('adminauth');
Route::get('/admin-dashboard','App\Http\Controllers\Admin\DashboardController@dashboard')->name('admin-dashboard');
Route::get('/adminlogout','App\Http\Controllers\Admin\DashboardController@adminlogout')->name('adminlogout');


Route::view('/login','login');
Route::view('/sign-up','sign-up');
Route::post('/login', 'App\Http\Controllers\HomeController@login')->name('login');
Route::post('/signup', 'App\Http\Controllers\HomeController@signup')->name('signup');
Route::get('/logout','App\Http\Controllers\HomeController@logout')->name('logout');
Route::view('/forget-password','forget-password');
Route::view('/pricing','pricing');

Route::resource('/categories', 'App\Http\Controllers\Admin\CategoryController');
Route::resource('/packages', 'App\Http\Controllers\Admin\PackageController');
Route::resource('/users', 'App\Http\Controllers\Admin\UserController');

Route::get('/change_status/{type}/{id}/{status}', 'App\Http\Controllers\Admin\CategoryController@change_status')->name('change_status');




Route::get('/user-dashboard','App\Http\Controllers\HomeController@dashboard')->name('user-dashboard');

Route::view('/order-detail','user.order-detail');
Route::view('/my-orders','user.my-orders');
Route::view('/account','user.account');
Route::view('/account-notification','user.account-notification');
Route::view('/account-connection','user.account-connection');




Route::view('/add-product','admin.add-product');
Route::view('/manage-order','admin.manage-order');
Route::view('/create-package','admin.create-package');





Route::view('/item','items.view-item');
Route::view('/cart','items.cart');
Route::view('/check-out','items.check-out');