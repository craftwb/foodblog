<?php namespace Blog\Repositories\Post;

use Blog\Entities\Post;
use Blog\Entities\User;
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
     * Return paginated list of posts
     */
    public function getPaginatedPosts()
    {
        return Post::paginate(5);
    }

    /**
     * @return mixed
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
        $user = $this->getCurrentUser();

        $this->post->title = $input['title'];
        $this->post->body = $input['body'];
        $this->post->published_at = new \DateTime();

        $this->post->user()->associate($user);
        $this->post->save();
        $this->post->categories()->sync([$input['category']]);
    }

    /**
     * @return \Illuminate\Support\Collection|static
     */
    public function getCurrentUser()
    {
        $user = User::find(\Auth::id());

        return $user;
    }

    /**
     * Updates the Post
     *
     * @param $id
     */
    public function update($id)
    {
        $post = Post::findOrFail($id);

        $post->fill(\Input::all());

        $post->save();
    }

    /**
     * Deletes the Post
     *
     * @param $id
     */
    public function delete($id)
    {
        $post = Post::findOrFail($id);

        $post->delete($post);
    }
}