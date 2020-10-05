<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'EmployeeController@index') -> name('home');
Route::get('/show/{id}', 'EmployeeController@show') -> name('show');

Route::get('/create', function () { return view('partials.create');}) -> name('create');
Route::post('/store', 'EmployeeController@store' ) -> name('store');

Route::get('/delete/{id}', 'EmployeeController@delete') -> name('delete');



