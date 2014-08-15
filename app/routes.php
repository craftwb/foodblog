<?php


/**
 * Shows
 */
Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);


/**
 * Viewing blog posts
 */
Route::resource('/blog', 'PostsController', [
    'only' => ['index', 'show']
]);

Route::get('/blog/posts/{id}', [
    'as' => 'show_post',
    'uses' => 'PostsController@show'
]);


/**
 * Login and session related
 */
Route::get('/login', 'LoginController@create');
Route::get('/logout', 'LoginController@destroy');
Route::resource('login', 'LoginController', [
    'only'  => ['store', 'create', 'destroy']
]);