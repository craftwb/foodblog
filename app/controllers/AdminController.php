<?php

class AdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /admin
	 *
	 * @return Response
	 */
	public function index()
	{
        if (Auth::user())
        {
            return View::make('admin.index');
        }
        return Redirect::intended('/login');
	}

}