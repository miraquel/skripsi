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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'PostController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('posts', 'PostController');

Route::resource('customers', 'CustomerController');

// Region Controller
Route::resource('provinces', 'ProvinceController');
Route::resource('provinces.regencies', 'RegencyController');
Route::resource('provinces.regencies.districts', 'DistrictController');
Route::resource('provinces.regencies.districts.villages', 'VillageController');
