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
use App\User;
use App\Adress;
use App\Image;
use App\Clothes;
use App\Role; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('test-role',function(){
    $user =User::find(1);
    return $user->roles;
})->middleware(['auth','user_is_admin']);

Route::get('/', function () {
    return view('welcome');
});
 

//Route::get('clothes', function () {    return  Clothes::with(['images'])->paginate(50);
//});
 

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['auth','user_is_admin'],function(){
 Route::get('services','ServiceController@index')->name('services');
 Route::get('clothes','ClothesController@index')->name('clothes');
 
 Route::get('new-cloth/{id?}','ClothesController@newCloth')->name('new-cloth');
 Route::put('new-cloth/{id}','ClothesController@update')->name('update-cloth');;
 Route::post('new-cloth','ClothesController@store');
 Route::delete('clothes/{id}','ClothesController@delete');
 
 
 Route::get('adresses','AdressController@index')->name('adresses');
 Route::get( 'users','UserController@index')->name('users');
 Route::post('users','UserController@store');
 Route::delete('users','UserController@delete');
 Route::put('users','UserController@update');
 
 Route::get( 'orders','OrderController@index')->name('orders');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
