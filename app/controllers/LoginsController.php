<?php

use Blog\Forms\LoginValidatorForm;

class LoginsController extends \BaseController {

    /**
     * @var \Blog\Forms\LoginValidatorForm
     */
    private $loginForm;

    /**
     * Injects the login form validator
     *
     * @param LoginValidatorForm $loginForm
     */
    function __construct(LoginValidatorForm $loginForm)
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
		return View::make('logins.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /login
	 *
	 * @return Response
	 */
	public function store()
	{
        $userInput = Input::only([
            'email', 'password'
        ]);

        $validated = $this->loginForm->validate($userInput);

        if ($validated)
        {
            $authenticated = Auth::attempt($userInput);
            if ($authenticated) return 'Login successful';
        }
        return 'Login failed';
	}


    /**
     * Remove the specified resource from storage.
     * DELETE /login/{id}
     *
     * @internal param int $id
     * @return Response
     */
	public function destroy()
	{
		Auth::logout();

        return Redirect::home();
	}

}