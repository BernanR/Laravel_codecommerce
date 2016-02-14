<?php

Route::get('categorias', ['as' => 'index', 'uses' => 'categoriasController@index']);

Route::get('categorias/create', ['as' => 'index', 'uses' => 'categoriasController@create']);