<?php namespace Blog\Repositories\Category;


use Blog\Entities\Category;

class CategoryRepository implements CategoryRepositoryInterface {

    /**
     * @var Category
     */
    private $category;

    function __construct(Category $category)
    {
        $this->category = $category;
    }


    /**
     * @return mixed
     */
    public function getAllCategories()
    {
        return $this->category->all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getSingleCategory($id)
    {
        // TODO: Implement getSingleCategory() method.
    }

    /**
     * @param $input
     * @return mixed
     */
    public function createCategory($input)
    {
        // TODO: Implement createCategory() method.
    }
}