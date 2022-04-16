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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/login','login');
Route::view('/sign-up','sign-up');
Route::view('/forget-password','forget-password');
Route::view('/pricing','pricing');

Route::view('/user-dashboard','user.dashboard');
Route::view('/order-detail','user.order-detail');
Route::view('/my-orders','user.my-orders');
Route::view('/account','user.account');
Route::view('/account-notification','user.account-notification');
Route::view('/account-connection','user.account-connection');


Route::view('/admin-dashboard','admin.dashboard');
Route::view('/add-category','admin.add-category');
Route::view('/add-product','admin.add-product');
Route::view('/manage-user','admin.manage-user');
Route::view('/manage-order','admin.manage-order');
Route::view('/create-package','admin.create-package');





Route::view('/item','items.view-item');
Route::view('/cart','items.cart');
Route::view('/check-out','items.check-out');