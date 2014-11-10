<?php

class CreatePostCest
{
    /**
     * @param FunctionalTester $I
     *
     */
    public function newPost(FunctionalTester $I)
    {
        $I->am('an authenticated user');
        $I->amHttpAuthenticated('pierre@pierreferre.com', 'secret');
        
        $I->amOnPage('/admin/posts/create');
        $I->fillField('title', 'some title');
        $I->fillField('body', 'some body');
        $I->selectOption('category', '2');
        $I->click('Publish');

        $I->seeInDatabase('posts', [ 'title' => 'some title', 'body' => 'some body' ] );
    }
}