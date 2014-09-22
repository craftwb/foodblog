<?php 
$I = new FunctionalTester($scenario);
$I->am('an authenticated user');
$I->amHttpAuthenticated('pierre@pierreferre.com', 'secret');
$I->wantTo('delete a post in the database');

$I->amOnPage('/admin/posts');
$I->click('Trash');

