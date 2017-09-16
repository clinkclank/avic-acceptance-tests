<?php
use PageObjects\Login as LoginPage;

$I = new AcceptanceTester($scenario);
$I->wantTo('log in');
$I->amOnPage(LoginPage::$URL);
$I->fillField(LoginPage::$usernameField,'newuser');
$I->fillField(LoginPage::$passwordField, '1233test');
$I->click(LoginPage::$loginButton);
$I->wait('4');
$I->see('Профиль пользователя');