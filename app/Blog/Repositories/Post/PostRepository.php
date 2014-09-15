<?php namespace Blog\Repositories\Post;

use Blog\Entities\Post;
use Michelf\Markdown;

class PostRepository implements PostRepositoryInterface {

    /**
     * @var
     */
    private $parser;

    /**
     * @param Markdown $parser
     */
    function __construct(Markdown $parser)
    {
        $this->parser = $parser;
    }


    /**
     * @return mixed
     * @todo Return latest posts
     */
    public function getRecentPosts()
    {
        return Post::orderBy('published_at', 'DESC')->limit(5)->get();
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
        $post->body = $this->parser->defaultTransform($input['body']);
        $post->published_at = new \DateTime();
        $post->save();
    }
}