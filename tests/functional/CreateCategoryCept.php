<?php 
$I = new FunctionalTester($scenario);
$I->am('an authenticated user');
$I->amHttpAuthenticated('pierre@pierreferre.com', 'secret');
$I->wantTo('create a new category in the database');

$I->amOnPage('/admin/categories/create');
$I->fillField('name', 'Maple Syrup');
$I->click('Create Category');
$I->seeInDatabase('categories', [ 'name' => 'Maple Syrup' ]);
