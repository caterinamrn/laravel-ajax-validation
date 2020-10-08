<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'PostController@index') -> name('post-index');
Route::get('/api/posts/all', 'PostApiController@index') -> name('post-api-index');
Route::get('post/create', 'PostController@create') -> name('post-create');
Route::post('post/store', 'PostController@store') -> name('post-store');
