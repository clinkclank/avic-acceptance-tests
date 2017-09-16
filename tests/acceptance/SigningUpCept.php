<?php
use PageObjects\SignUp as SignupPage;

$I = new AcceptanceTester($scenario);
$I->wantTo('sign up new user');
$I->amOnPage(SignupPage::$URL);
$I->fillField(SignupPage::$usernameField,'newuser123');
$I->fillField(SignupPage::$emailField, 'new.usertester123@gmail.com');
$I->fillField(SignupPage::$passwordField, '1233test');
$I->fillField(SignupPage::$confirmPasswordField, '1233test');
$I->click(SignupPage::$signUpButton);
$I->wait('4');
$I->seeElement('Вход в систему', '.last');



