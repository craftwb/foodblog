<?php namespace Blog\Repositories\Category;


interface CategoryRepositoryInterface {

    /**
     * @return mixed
     */
    public function getAllCategories();

    /**
     * @param $id
     * @return mixed
     */
    public function getSingleCategory($id);

    /**
     * @param $input
     * @return mixed
     */
    public function createCategory($input);

} 