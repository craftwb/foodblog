<?php
/**
 * Successful login
 */
$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('authenticate users to the admin section');
$I->amOnPage('/login');

$I->fillField('email', 'pierre@pierreferre.com');
$I->fillField('password', 'secret');
$I->click('Login');

$I->seeInCurrentUrl('admin');