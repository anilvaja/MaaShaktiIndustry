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
});

//Route::resource('admin/posts', 'Admin\\PostsController');
Route::resource('admin/order-channel', 'Admin\\OrderChannelController');
Route::resource('admin/companies', 'Admin\\CompaniesController');
Route::resource('admin/order-status', 'Admin\\OrderStatusController');
Route::resource('admin/order-types', 'Admin\\OrderTypesController');
Route::resource('admin/user-types', 'Admin\\UserTypesController');
Route::resource('admin/navigation', 'Admin\\NavigationController');
Route::resource('admin/orders', 'Admin\\OrdersController');