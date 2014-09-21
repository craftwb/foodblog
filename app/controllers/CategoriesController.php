<?php

use Blog\Forms\NewCategory;
use Blog\Repositories\Category\CategoryRepositoryInterface;

class CategoriesController extends \BaseController {

    /**
     * @var CategoryRepositoryInterface
     */
    private $category;
    /**
     * @var NewCategory
     */
    private $newCategoryForm;

    /**
     * @param CategoryRepositoryInterface $category
     * @param NewCategory $newCategoryForm
     */
    function __construct(CategoryRepositoryInterface $category, NewCategory $newCategoryForm)
    {
        $this->category = $category;
        $this->newCategoryForm = $newCategoryForm;
    }


    /**
	 * Display a listing of the resource.
	 * GET /categories
	 *
	 * @return Response
	 */
	public function index()
	{
        $categories = $this->category->getAllCategories();

		return View::make('admin.categories.index', [ 'categories' => $categories ]);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /categories/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.categories.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /admin/categories
	 *
	 * @return Response
	 */
	public function store()
	{
        if ( ! $this->newCategoryForm->validate($input = Input::all()) )
        {
            Redirect::back()->with(Flash::error('This form is invalid'));
        }

        $this->category->createCategory($input);

        return Redirect::route('admin.categories.index')->with(Flash::success('New category created'));
	}

	/**
	 * Display the specified resource.
	 * GET /admin/categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $category = $this->category->getSingleCategory($id);

        return View::make('admin.categories.show', ['category' => $category]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /admin/categories/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$category = $this->category->getSingleCategory($id);

		return View::make('admin.categories.edit', [ 'category' => $category ]);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /admin/categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if (!$this->category->update($id))
		{
			Redirect::back()->with(Flash::error('Could not update the resource'));
		}

		return Redirect::route('admin.categories.index')->with(Flash::success('Category updated'));
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /admin/categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if (!$this->category->delete($id))
        {
            Redirect::back()->with(Flash::error('Could not delete the category'));
        }

        return Redirect::route('admin.categories.index')->with(Flash::success('Successfully deleted this category'));
	}

}