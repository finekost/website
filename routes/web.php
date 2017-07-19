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

Route::get('/', 'MainController@home');
Route::get('/{title}', 'MainController@detail');
Route::get('/portfolio/{title}', 'MainController@detail');

Route::get('/case', function () {
    return view('detail');
});
