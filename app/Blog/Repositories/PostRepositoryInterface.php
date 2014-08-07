<?php namespace Blog\Repositories;


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
} 