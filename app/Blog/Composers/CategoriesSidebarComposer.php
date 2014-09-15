<?php namespace Blog\Composers;

use Blog\Entities\Category;

class CategoriesSidebarComposer {

    /**
     * @var Category
     */
    private $category;

    function __construct(Category $category)
    {
        $this->category = $category;
    }

    function compose($view)
    {
        $view->with('categories', $this->category->all());
    }
}