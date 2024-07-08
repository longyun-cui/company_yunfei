<?php


$controller = 'LaiIndexController';
Route::get('/', function () {
    return view('welcome');
});



$controller = 'LaiIndexController';

Route::get('/', $controller.'@view_index');
Route::get('/welcome', $controller.'@view_welcome');


Route::match(['get','post'], 'login', $controller.'@login');
Route::match(['get','post'], 'logout', $controller.'@logout');
