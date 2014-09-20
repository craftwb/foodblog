<?php

use Blog\Entities\Category;
use Blog\Repositories\Post\PostRepositoryInterface;
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
     * @var CategoryRepositoryInterface
     */
    private $category;

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
        $categories = Category::lists('name', 'id');

        return View::make('posts.create', [ 'categories' => $categories ]);
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

    /**
     * @return Response
     */
    public function store()
    {
        if ( !$this->newPostForm->validate($input = Input::only(['title', 'category', 'body'])))
        {
            return Redirect::back()->with(Flash::error('The form is invalid'));
        }

        $this->post->createPost($input);

        return Redirect::route('admin_dashboard')->with(Flash::success('Post created'));
    }


}