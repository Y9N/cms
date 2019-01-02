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
Route::get('/User', function () {
    echo 111;
});
Route::get('order','Order\Info@first');
Route::get('admin','Admin\Ha@info');
Route::get('user','User\UserController@info');
Route::get('order1','Order\Info@add');
Route::get('update/{id}','Order\Info@update');
Route::get('delete/{id}','Order\Info@delete');