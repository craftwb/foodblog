<?php
namespace FunctionalTester;

class UserSteps extends \FunctionalTester
{
    public function authenticate()
    {
        $I = $this;
        $I->am('an authenticated user');
        $I->seeAuthentication();

        $I->assertTrue(Auth::check());
    }
}