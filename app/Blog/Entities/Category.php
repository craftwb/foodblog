<?php namespace Blog\Entities;

class Category extends \Eloquent {
	protected $fillable = ['name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->belongsToMany('Blog\Entities\Post');
    }
}