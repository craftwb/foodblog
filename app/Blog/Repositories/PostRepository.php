<?php namespace Blog\Repositories;

use Blog\Entities\Post;

class PostRepository implements PostRepositoryInterface {

    /**
     * @return mixed
     * @todo Return latest posts
     */
    public function getRecentPosts()
    {
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

    /**
     * @param $input
     * @return mixed
     */
    public function createPost($input)
    {
        $post = new Post();
        $post->title = $input['title'];
        $post->body = $input['body'];
        $post->published_at = new \DateTime();
        $post->save();
    }
}