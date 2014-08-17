<?php namespace Blog\Entities;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends \Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = ['email', 'password'];

    /**
     * Get Posts associated to this user
     *
     * @return Blog\Entities\Post
     */
    public function posts()
    {
    	return $this->hasMany('Post');
    }

}
