<?php namespace Blog\Forms;

use Laracasts\Validation\FormValidator;

class NewCategory extends FormValidator {

    /**
     * Rules for creating a new category
     *
     * @var array
     */
    protected $rules = [
        'name'  => 'required'
    ];

} 