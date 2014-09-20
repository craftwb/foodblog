<?php namespace Blog\Entities;

class Post extends \Eloquent {
    /**
     * @var array
     */
    protected $fillable = ['title', 'body', 'published_at'];

    /**
     * Converts to instances of Carbon
     *
     * @return array
     */
    public function getDates()
    {
        return ['created_at', 'updated_at', 'published_at'];
    }

    /**
     * Get the associated Users
     * 
     * @return Blog\Entities\User
     */
    public function user()
    {
    	return $this->belongsTo('Blog\Entities\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany('Blog\Entities\Category');
    }
}