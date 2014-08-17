<?php namespace Blog\Composers;

use Blog\Repositories\PostRepository;

class ConversationsComposer {

    /**
     * @var PostRepository
     */
    private $post;

    function __construct(PostRepository $post)
    {
        $this->post = $post;
    }

    public function compose($view)
    {
        $view->with('posts', $this->post->published_at->diffForHumans());
    }
} 