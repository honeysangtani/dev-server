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
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', 'CategoryController@getCategory');
Route::post('/category-add', 'CategoryController@addCategory');
Route::get('/category/{id}', 'CategoryController@getCategoryById');
Route::post('/category-edit/{id}', 'CategoryController@editCategory');
Route::get('/category-delete/{id}', 'CategoryController@deleteCategory');






