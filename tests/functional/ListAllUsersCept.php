<?php
$I = new FunctionalTester($scenario);
$I->am('an authenticated user');
$I->amHttpAuthenticated('pierre@pierreferre.com', 'secret');
$I->wantTo('view list of all registered users');

$I->amOnPage('/admin/users');
$I->seeInDatabase('users', ['id' => 1, 'id' => 2]);
