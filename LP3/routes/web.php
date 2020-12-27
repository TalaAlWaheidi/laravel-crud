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

// use Illuminate\Routing\Route;

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/form','StudentController@create')->name('form');
Route::get('/form','StudentController@index');
Route::get('/admin','StudentController@show');
Route::get('student/{id}','StudentController@destroy');
Route::get('/update/{id}','StudentController@edit');
Route::post('/update/{id}','StudentController@update')->name('update');
Route::get('welcome','StudentController@store');
Route::get('/details{id}','StudentController@detaile');


