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
        if (Auth::check())
        {
            return View::make('admin.index');
        }
        
        return Redirect::intended('/login');
	}

}