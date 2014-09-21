<?php
use \FunctionalTester;

class CreatePostCest
{
    public function _before(FunctionalTester $I)
    {
        $I->am('an authenticated user');
        $I->amHttpAuthenticated('pierre@pierreferre.com', 'secret');
        $I->wantTo('create a new blog post');
    }


    // tests
    public function test_it_creates_a_new_post(FunctionalTester $I)
    {
        $I->amOnPage('/admin/posts/create');
        $I->fillField('title', 'some title');
        $I->fillField('body', 'some body');
        $I->selectOption('category', '2');
        $I->click('Publish');

        $I->seeInDatabase('posts', [ 'title' => 'some title', 'body' => 'some body', 'user_id' => 1 ] );
    }
}