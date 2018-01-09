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


Route::get('latihan', 'x@coba');
Route::get('abt', 'x@about');
Route::get('tambah', 'x@pertambahan');
Route::get('pengulangan', 'x@loop');
Route::get('x1', 'xx@test');
Route::get('xa', 'xx@test1');
Route::get('1', 'AboutController@index');
Route::get('2', function () {
    return view('testing');
});