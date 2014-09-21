<?php

/**
 * Home
 */
Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

/**
 * Posts resource
 */
Route::resource('/posts', 'PostsController', [
    'only' => [ 'show', 'index' ]
]);
Route::get('/blog', [
    'as' => 'blog_home',
    'uses' => 'PostsController@index'
]);
Route::get('/blog/posts/{id}', [
    'as'    =>  'show_post',
    'uses'  =>  'PostsController@show'
]);
/**
 * Administer those resources
 */
Route::when('admin/*', 'auth');
Route::resource('/admin/posts', 'AdminPostsController');
Route::resource('/admin/categories', 'CategoriesController');
Route::get('/admin/dashboard', [
    'as' => 'admin_dashboard',
    'uses' => 'AdminController@index'
]);
Route::resource('admin', 'AdminController@index', [
    'only' => [ 'index' ]
]);

/**
 * Login and session related
 */
Route::get('/login', [
    'as'  => 'login',
    'uses'  =>  'LoginController@create'
]);
Route::get('/logout', [
    'as' => 'logout',
    'uses' => 'LoginController@destroy'
]);
Route::resource('login', 'LoginController', [
    'only'  => ['store', 'create', 'destroy']
]);
