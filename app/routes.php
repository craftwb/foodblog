<?php


Route::get('/', 'HomeController@index');

Route::resource('/posts', 'PostsController', ['only' => [
    'index', 'show'
]]);

Route::get('/posts/{id}', [
    'as' => 'show_post',
    'uses' => 'PostsController@show'
]);