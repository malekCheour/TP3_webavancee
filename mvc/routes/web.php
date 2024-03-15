<?php
use App\Controllers;
use App\Routes\Route;

Route::get('/', 'HomeController@index');


Route::get('/client', 'ClientController@index');
Route::get('/client/show', 'ClientController@show');

Route::get('/client/create', 'ClientController@create');
Route::post('/client/create', 'ClientController@store');

Route::get('/client/edit', 'ClientController@edit');
Route::post('/client/edit', 'ClientController@update');

Route::post('/client/delete', 'ClientController@delete');

//location

Route::get('/', 'HomeController@index');


Route::get('/location', 'LocationController@index');
Route::get('/location/show', 'LocationController@show');

Route::get('/location/create', 'LocationController@create');
Route::post('/location/create', 'LocationController@store');

Route::get('/location/edit', 'LocationController@edit');
Route::post('/location/edit', 'LocationController@update');

Route::post('/location/delete', 'LocationController@delete');

//user 
Route::get('/user/create', 'UserController@create');
Route::post('/user/create', 'UserController@store');
//auth
Route::get('/login', 'AuthController@index');
Route::post('/login', 'AuthController@store');
Route::get('/logout', 'AuthController@delete');


Route::dispatch();
?>

