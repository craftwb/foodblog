<?php namespace Blog\Repositories;

use Blog\Entities\Post;

class PostRepository implements PostRepositoryInterface {

    /**
     * @return mixed
     */
    public function getRecentPosts()
    {
        //testing service
        return Post::all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getSinglePost($id)
    {
        return Post::findOrFail($id);
    }
}