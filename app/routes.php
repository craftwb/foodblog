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
Route::get('/login', 'LoginsController@create');
Route::get('/logout', 'LoginsController@destroy');
Route::resource('logins', 'LoginsController', [
    'only'  => ['store', 'create', 'destroy']
]);