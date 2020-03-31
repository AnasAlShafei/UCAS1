<?php

// use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'auth', 'namespace' => 'Api\Auth'], function () {
    Route::post('register', 'RegisterController@register');
});

Route::group(['prefix' => 'products', 'middleware' => 'auth:api', 'namespace' => 'products'], function () {

    //Show All products;
    Route::get('/', 'ProductsController@ApiShowProducts');
    //store new product
    Route::post('/store','ProductsController@ApiStoreProduct');
    //show product by id
    Route::get('/ShowProduct/{id}','ProductsController@ApiShowProductById');
    //delete product by id
    Route::post('/delete/{id}','ProductsController@ApiDeleteProduct');
});
