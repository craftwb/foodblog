<?php namespace Blog\Entities;

class Post extends \Eloquent {
    /**
     * @var array
     */
    protected $fillable = ['title', 'body'];

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
     * Get the associated User
     * 
     * @return Blog\Entities\User
     */
    public function user()
    {
    	return $this->belongsTo('User');
    }
}