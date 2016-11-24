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

Auth::routes();

Route::get('/home', 'HomeController@index');

// Chef routes
Route::get('/kitchen', 'ChefController@kitchen');

Route::get('/meals/add', 'MealController@add');
Route::post('/meals/create', 'MealController@create');

// Customer routes
Route::get('/eat', 'EatController@index');