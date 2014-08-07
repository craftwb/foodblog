<?php


Route::get('/', 'HomeController@index');

Route::get('/blog/posts', 'PostsController@index');

Route::get('/blog/posts/{year}/{day}/{month}/{title}', 'PostsController@show');