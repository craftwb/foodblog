<?php

use Blog\Entities\Category;
use Blog\Repositories\Post\PostRepositoryInterface;
use Blog\Forms\NewPost;

class AdminPostsController extends \BaseController {

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
	 * GET /admin/posts
	 *
	 * @return Response
	 */
	public function index()
	{
        $posts = $this->post->getPaginatedPosts();

        return View::make('admin.posts.index', ['posts' => $posts]);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /admin/posts/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $categories = Category::lists('name', 'id');

        return View::make('admin.posts.create', [ 'categories' => $categories ]);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /admin/posts
	 *
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


	/**
	 * Show the form for editing the specified resource.
	 * GET /admin/posts/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = $this->post->getSinglePost($id);

        return View::make('admin.posts.edit', ['post' => $post]);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /admin/posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if ( !$this->post->update($id) )
        {
            Redirect::back()->with(Flash::error('There was an error updating this resource'));
        }

        $this->post->update($id);

        return Redirect::route('admin.posts.index')->with(Flash::success('Successfully updated'));
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /admin/posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
     *
     * @todo Write a unit test for this failing path
	 */
	public function destroy($id)
	{
//		if ( !$this->post->delete($id) )
//        {
//            Redirect::back()->with(Flash::error('Could not delete this resource'));
//        }

        $this->post->delete($id);

        return Redirect::route('admin.posts.index')->with(Flash::success('Successfully deleted'));
	}

}