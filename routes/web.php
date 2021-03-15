<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


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
Route::get('/about', 'App\Http\Controllers\HelloController@about');
Route::get('/service', 'App\Http\Controllers\ServiceController@index');

Route::post('/service', 'App\Http\Controllers\ServiceController@store');

Route::get('/customers', 'App\Http\Controllers\CustomerController@index');
Route::get('/customers/create', 'App\Http\Controllers\CustomerController@create');
Route::post('/customers', 'App\Http\Controllers\CustomerController@store');
Route::get('/customers/{customer}', 'App\Http\Controllers\CustomerController@show');
Route::get('/customers/{customer}/edit', 'App\Http\Controllers\CustomerController@edit');
Route::patch('/customers/{customer}', 'App\Http\Controllers\CustomerController@update');


//Route::view('/about', 'about');
//Route::view('/services', 'services');

    
//    return view('subviews.hello', 
//    [ 
//        'coolString' => $coolString 
//    ]
//    );

