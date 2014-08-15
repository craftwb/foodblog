<?php

use Blog\Forms\LoginForm;

class LoginController extends \BaseController {

    /**
     * @var \Blog\Forms\LoginForm
     */
    private $loginForm;

    /**
     * Injects the login form validator
     *
     * @param LoginForm $loginForm
     */
    function __construct(LoginForm $loginForm)
    {
        $this->loginForm = $loginForm;
    }


    /**
	 * Show the form for creating a new resource.
	 * GET /login/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('login.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /login
	 *
	 * @return Response
	 */
	public function store()
	{
        $this->loginForm->validate($input = Input::only('email', 'password'));

        if (Auth::attempt($input))
        {
            return Redirect::intended('admin/dashboard')->with(Flash::success('You are logged in'));
        }

        return Redirect::back()->with(Flash::error('Invalid credentials'));
	}


    /**
     * Remove the specified resource from storage.
     * DELETE /login/{id}
     *
     * @internal param int $id
     * @return Response
     */
	public function destroy($id = null)
	{
		Auth::logout();

        return Redirect::home();
	}

}