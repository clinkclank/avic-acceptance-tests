<?php
use PageObjects\Login as LoginPage;
use PageObjects\Profile as ProfilePage;

$I = new AcceptanceTester($scenario);
$I->wantTo('log in');
$I->amOnPage(LoginPage::$URL);
$I->fillField(LoginPage::$usernameField,'newuser');
$I->fillField(LoginPage::$passwordField, '1233test');
$I->click(LoginPage::$loginButton);
$I->wait('3');
$I->fillField(ProfilePage::$firstLastNameField, 'Анна Петрова');
$I->fillField(ProfilePage::$phoneField, '380980112233');
$I->click(ProfilePage::$saveButtonFirst);
$I->seeInField('fullname', 'Анна Петрова');
$I->seeInField('phone', '380980112233');


