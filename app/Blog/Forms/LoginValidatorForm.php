<?php namespace Blog\Forms;


use Laracasts\Validation\FormValidator;

class LoginValidatorForm extends FormValidator {

    /**
     * Validator rules for the login form
     *
     * @var array
     */
    protected $rules = [
        'email'     =>  'required',
        'password'  =>  'required'
    ];
} 