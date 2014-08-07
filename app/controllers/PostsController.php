<?php

use Blog\Entities\Post;

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /posts
	 *
	 * @return Response
	 */
	public function index()
	{
        $posts = Post::all();

        return View::make('posts.index', ['posts' => $posts]);
	}


	/**
	 * Display the specified resource.
	 * GET /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $post = Post::find($id);

		return View::make('posts.show', ['post' => $post]);
	}


}