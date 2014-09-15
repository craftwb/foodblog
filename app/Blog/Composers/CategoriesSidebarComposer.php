<?php namespace Blog\Composers;

use Blog\Repositories\Category\CategoryRepositoryInterface;

class CategoriesSidebarComposer {

    /**
     * @var Category
     */
    private $category;

    function __construct(CategoryRepositoryInterface $category)
    {
        $this->category = $category;
    }

    function compose($view)
    {
        $view->with('categories', $this->category->getAllCategories());
    }
}