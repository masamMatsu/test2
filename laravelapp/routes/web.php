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

Route::get('hello', 'App\Http\Controllers\HelloController@index');
Route::get('hello/other', 'App\Http\Controllers\HelloController@other');
Route::get('hello/other2', 'App\Http\Controllers\HelloController@other2');

Route::get('jissyu12', 'App\Http\Controllers\Jissyu5_3Controller@index');
Route::get('jissyu12/show', 'App\Http\Controllers\Jissyu5_3Controller@show');
Route::get('jissyu12/add', 'App\Http\Controllers\Jissyu5_3Controller@add');
Route::post('jissyu12/create', 'App\Http\Controllers\Jissyu5_3Controller@create');
Route::get('jissyu12/edit', 'App\Http\Controllers\Jissyu5_3Controller@edit');
Route::post('jissyu12/update', 'App\Http\Controllers\Jissyu5_3Controller@update');
Route::get('jissyu12/del', 'App\Http\Controllers\Jissyu5_3Controller@del');
Route::post('jissyu12/remove', 'App\Http\Controllers\Jissyu5_3Controller@remove');
