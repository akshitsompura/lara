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
/*Route::get('/about', function(){
    return view('about');
}); */
Route::get('/about', 'AboutController@index');
Route::post('/add', 'AboutController@add');
Route::get('/about/{ids}', 'AboutController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');