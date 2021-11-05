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

Route::get("products" , 'App\Http\Controllers\ProductController@index' );
Route::get("products/{id}" , 'App\Http\Controllers\ProductController@show' );














Route::get("/product/create" ,'App\Http\Controllers\ProductController@create');

Route::post("product/store" , 'App\Http\Controllers\ProductController@store' );

Route::middleware("is_admin")->group(function(){
    //for update
    Route::get("products/edit/{id}" , 'App\Http\Controllers\ProductController@edit' );

    Route::post("products/update/{id}" , 'App\Http\Controllers\ProductController@update' );
//for delete peoduct
Route::get("products/delete/{id}" , 'App\Http\Controllers\ProductController@delete' );
//create

Route::get("/product/create" ,'App\Http\Controllers\ProductController@create');

Route::post("product/store" , 'App\Http\Controllers\ProductController@store' );
});
// login
Route::get("user/login" , 'App\Http\Controllers\user\AuthController@login' );
Route::post("user/login" , 'App\Http\Controllers\user\AuthController@check' );
Route::get("user/register" , 'App\Http\Controllers\user\AuthController@register' );
Route::post("user/create" , 'App\Http\Controllers\user\AuthController@create' );



