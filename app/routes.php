<?php


/**
 * Shows
 */
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

/**
 * Posts resource
 */
Route::get('/blog', ['as' => 'blog_home', 'uses' => 'PostsController@index']);
Route::resource('/posts', 'PostsController', ['only' => ['index', 'show', 'create', 'store']]);
Route::get('/blog/posts/{id}', 'PostsController@show');
Route::get('/posts/{id}', ['as' => 'show_post', 'uses' => 'PostsController@show']);

/**
 * Login and session related
 */
Route::get('/login', ['as'  => 'login', 'uses'  =>  'LoginController@create'] );
Route::get('/logout', ['as' => 'logout', 'uses' => 'LoginController@destroy']);
Route::resource('login', 'LoginController', [ 'only'  => ['store', 'create', 'destroy'] ]);

/**
 * Admin
 */
Route::get('/admin/dashboard', [ 'as' => 'admin_dashboard', 'uses' => 'AdminController@index' ] );
Route::resource('admin', 'AdminController', [ 'only' => [ 'index' ] ] );
