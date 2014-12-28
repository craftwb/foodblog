<?php

class CreatePostCest
{
    /**
     * @param FunctionalTester $I
     *
     */
    public function newPost(FunctionalTester $I)
    {
        $I->amLoggedAs(['email' => 'pierre@pierreferre.com', 'password' => 'secret']);
        $I->seeAuthentication();

        $I->amOnPage('/admin/posts/create');
        $I->fillField('title', 'some title');
        $I->fillField('body', 'some body');
        $I->selectOption('category', '2');
        $I->click('Publish');

        $I->seeRecord('posts', ['title' => 'some title']);
    }
}