<?php

class CreatePostCest
{

    /**
     * @param \FunctionalTester\UserSteps $I
     */
    public function login(FunctionalTester\UserSteps $I)
    {
        $I->login();
    }

    /**
     * @param FunctionalTester $I
     *
     * @depends login
     */
    public function newPost(FunctionalTester $I)
    {
        $I->amOnPage('/admin/posts/create');
        $I->fillField('title', 'some title');
        $I->fillField('body', 'some body');
        $I->selectOption('category', '2');
        $I->click('Publish');

        $I->seeInDatabase('posts', [ 'title' => 'some title', 'body' => 'some body' ] );
    }
}