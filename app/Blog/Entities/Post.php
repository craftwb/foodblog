<?php namespace Blog\Entities;

class Post extends \Eloquent {
	protected $fillable = ['name', 'email', 'password', 'role'];
}