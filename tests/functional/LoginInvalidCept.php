<?php

/**
 * Unsuccessful login
 */
$I = new FunctionalTester($scenario);
$I->wantTo('test login with invalid credentials');
$I->amOnPage('/login');

$I->fillField('email', 'fredo.f@gmail.com');
$I->fillField('password', 'test');
$I->click('Login');

$I->see('Invalid credentials');