<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('auth/register','Api\AuthController@register');
Route::post('auth/login','Api\AuthController@login');

Route::get('clothes','api\ClothesController@index') ;

Route::get('services','api\ServicesController@index') ;
Route::get('services/{id}','api\ServicesController@show');
Route::get('services/{id}/clothes','api\ServicesController@clothes');

Route::post('carts','Api/CartController@addClothesToCart');
 
Route::get('images','api\ImageController@index') ;

Route::middleware('auth:api')->get('/users', function (Request $request) {
    return $request->user();
});