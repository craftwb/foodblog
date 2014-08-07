<?php


Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

Route::resource('/blog', 'PostsController', [
    'only' => ['index', 'show']
]);

Route::get('/blog/posts/{id}', [
    'as' => 'show_post',
    'uses' => 'PostsController@show'
]);