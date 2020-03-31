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
    return view('home');
});


Route::resource('stadium', 'StadiumController');
Route::post('/stadium/{stadium}', 'StadiumController@updatestatus');
Route::post('stadiumsearch', 'StadiumController@search');


Route::resource('pool', 'PoolController');
Route::post('/pool/{pool}', 'PoolController@updatestatus');
Route::post('poolsearch', 'PoolController@search');



Route::resource('Bodybuilding', 'BodybuildingController');
Route::post('Bodybuilding/{bodybuilding}', 'BodybuildingController@updatestatus');
Route::post('Bodybuildingsearch', 'BodybuildingController@search');


//////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////
Route::group(['prefix' => 'products', 'namespace' => 'products', 'middleware' => 'auth'], function () {
    Route::resource('products', 'ProductsController');
    Route::get('/user_id/{id}', 'ProductsController@productsUserId');
    Route::post('/store', 'ProductsController@store')->name('product.store');
});

Route::group(['prefix' => 'users', 'namespace' => 'users', 'middleware' => 'auth'], function () {
    Route::resource('users', 'UserController');
});



Auth::routes();
Route::get('/', 'HomeController@index');
