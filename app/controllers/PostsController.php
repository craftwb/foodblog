<?php

use Blog\Repositories\PostRepositoryInterface;
use Blog\Forms\NewPost;

class PostsController extends \BaseController {

    /**
     * @var PostRepositoryInterface
     */
    private $post;
    /**
     * @var newPostForm
     */
    private $newPostForm;

    /**
     * @param PostRepositoryInterface $post
     * @param NewPost $newPostForm
     */
    function __construct(PostRepositoryInterface $post, NewPost $newPostForm)
    {
        $this->post = $post;
        $this->newPostForm = $newPostForm;
    }


    /**
	 * Display a listing of the resource.
	 * GET /posts
	 *
	 * @return Response
	 */
	public function index()
	{
        $posts = $this->post->getRecentPosts();

        return View::make('posts.index', ['posts' => $posts]);
	}

    /**
     * Displays form to create new post
     *
     * @return Response
     */
    public function create()
    {
        return View::make('posts.create');
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
        $post = $this->post->getSinglePost($id);

		return View::make('posts.show', ['post' => $post]);
	}


}