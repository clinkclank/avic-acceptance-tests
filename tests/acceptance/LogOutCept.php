<?php
use PageObjects\Login as LoginPage;
use PageObjects\Profile as ProfilePage;

$I = new AcceptanceTester($scenario);
$I->wantTo('log out');
$I->amOnPage(LoginPage::$URL);
$I->fillField(LoginPage::$usernameField,'newer');
$I->fillField(LoginPage::$passwordField, '123hey');
$I->click(LoginPage::$loginButton);
$I->wait(5);
$I->click(ProfilePage::$logOutLink);
$I->waitForText('Вход', '10');
$I->see('Вход', '.js-_view-popup');