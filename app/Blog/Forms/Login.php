<?php namespace Blog\Forms;


use Laracasts\Validation\FormValidator;

class Login extends FormValidator {

    /**
     * Validator rules for the login form
     *
     * @var array
     */
    protected $rules = [
        'email'     =>  'required|email',
        'password'  =>  'required'
    ];
} 