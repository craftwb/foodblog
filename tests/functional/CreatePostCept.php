<?php 
$I = new FunctionalTester($scenario);
$I->am('an authenticated user');
$I->amHttpAuthenticated('pierre@pierreferre.com', 'secret');
$I->wantTo('create a new blog post');

$I->amOnPage('/posts/create');
$I->fillField('title', 'some title');
$I->fillField('body', 'some body');
$I->click('Publish');

$I->seeRecord('posts', ['title' => 'some title', 'body' => 'some body']);
