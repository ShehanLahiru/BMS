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

Route::get('/who', function () {
    return "ComeOn man";
});


Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

//Route::get('/Add', 'RegistrationController@create');
//Route::post('Add', 'RegistrationController@store');
Route::get('helloworld', 'HelloWorldController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/boardingdetails', function () {
    return view('boardingdetails');
});
