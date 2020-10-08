<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'PostController@index') -> name('post-index');
Route::get('/api/posts/all', 'PostApiController@index') -> name('post-api-index');
