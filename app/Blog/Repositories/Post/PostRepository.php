<?php namespace Blog\Repositories\Post;

use Blog\Entities\Post;
use Blog\Entities\User;
use Illuminate\Support\Facades\Auth;
use Michelf\Markdown;

class PostRepository implements PostRepositoryInterface {

    /**
     * @var
     */
    private $parser;
    /**
     * @var Post
     */
    private $post;

    /**
     * @param Markdown $parser
     * @param Post $post
     */
    function __construct(Markdown $parser, Post $post)
    {
        $this->parser = $parser;
        $this->post = $post;
    }


    /**
     * @return mixed
     * @todo Return latest posts
     */
    public function getRecentPosts()
    {
        return $this->post->orderBy('published_at', 'DESC')->limit(5)->get();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getSinglePost($id)
    {
        return $this->post->findOrFail($id);
    }

    /**
     * @param $input
     * @return mixed
     */
    public function createPost($input)
    {
        $user = User::find(\Auth::id());

        $post = Post::create([
            'title' => $input['title'],
            'body' => $input['body'],
            'published_at' => new \DateTime()
        ]);

        $post->user()->associate($user);
        $post->save();
        $post->categories()->sync([$input['category']]);
    }
}