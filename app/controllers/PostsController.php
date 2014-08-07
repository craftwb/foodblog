<?php

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

        return View::make('posts.index', array('posts' => $posts));
	}


    /**
     * Display the specified resource.
     * GET /posts/{id}
     *
     * @param $year
     * @param $day
     * @param $month
     * @param $title
     * @internal param int $id
     * @return Response
     */
	public function show($year, $day, $month, $title)
	{
        $title = str_replace(' ', '-', $title);
		return 'show post '.$title;
	}


}