<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', 'LoginController@index');
Route::post('login', 'LoginController@loginAdmin');

Route::get('users', 'UserController@index')->name('user_list');
Route::get('users/{id}/edit', 'UserController@edit'); //need to be place above other route
Route::post('users/store', 'UserController@store')->name('user_store');
Route::post('users/{id}/update', 'UserController@update');
Route::delete('users/{id}/destroy', 'UserController@destroy');
// Route::get('users/{id}/status/{status_id}', 'UserController@status');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
