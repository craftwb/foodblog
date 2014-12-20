<?php namespace Blog\Composers;

use Blog\Repositories\Post\PostRepositoryInterface;

class RecentPostsComposer {

    /**
     * @var PostRepository
     */
    private $post;

    function __construct(PostRepositoryInterface $post)
    {
        $this->post = $post;
    }

    public function compose($view)
    {
        $view->with('posts', $this->post->getRecentPosts());
    }
} 