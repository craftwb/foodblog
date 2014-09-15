<?php namespace Blog\Repositories\Post;


interface PostRepositoryInterface {

    /**
     * @return mixed
     */
    public function getRecentPosts();

    /**
     * @param $id
     * @return mixed
     */
    public function getSinglePost($id);

    /**
     * @param $input
     * @return mixed
     */
    public function createPost($input);
} 