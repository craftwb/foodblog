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
        return $this->category->findOrFail($id);
    }

    /**
     * @param $input
     * @return mixed
     */
    public function createCategory($input)
    {
        $category = Category::create([
                'name' => $input['name']
            ]
        );

        $category->save();
    }


    /**
     * @param $id The id of the Category
     * @return mixed|void
     */
    public function update($id)
    {
        $category = Category::findOrFail($id);

        $category->fill(\Input::all());

        $category->save();
    }

    /**
     * @param $id
     * @return mixed|void
     */
    public function delete($id)
    {
        $category = Category::findOrFail($id);

        $category->delete($category);
    }
}