<?php namespace Blog\Forms;


use Laracasts\Validation\FormValidator;

class NewPost extends FormValidator {

    /**
     * Rules for creating a new post form
     *
     * @var array
     */
    protected $rules = [
        'title'     =>  'required',
        'body'      =>  'required'
    ];

} 