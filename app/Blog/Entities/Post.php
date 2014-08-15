<?php namespace Blog\Entities;

class Post extends \Eloquent {
    /**
     * @var array
     */
    protected $fillable = ['title', 'body'];
}