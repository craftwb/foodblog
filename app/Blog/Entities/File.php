<?php namespace Blog\Entities;

class File extends \Eloquent {
	protected $fillable = ['path', 'type'];
}