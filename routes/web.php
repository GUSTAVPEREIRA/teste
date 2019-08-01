<?php
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::get('/categoria', 'CategoriaController@index');
Route::get('/categoria/criar', 'CategoriaController@create');
Route::put('/categoria/update/{id}', 'CategoriaController@update');
Route::post('/categoria/criar', 'CategoriaController@store');
Route::post('/categoria/{id}', 'CategoriaController@edit');
Route::delete('/categoria/{id}','CategoriaController@destroy');

Route::get('/produto', 'ProdutoController@index');
Route::get('/produto/criar', 'ProdutoController@create');
Route::put('/produto/update/{id}', 'ProdutoController@update');
Route::post('/produto/criar', 'ProdutoController@store');
Route::post('/produto/{id}', 'ProdutoController@edit');
Route::delete('/produto/{id}','ProdutoController@destroy');


Route::get('/sobre', 'SobreController@index');
