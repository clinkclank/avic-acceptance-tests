<?php
namespace PageObjects;

class Profile {
    public static $URL = '/profile';
    public static $logOutLink = 'Выйти';
    public static $usernameField = ['name'=> 'username'];
    public static $emailField = ['name'=> 'email'];
    public static $firstLastNameField = ['name'=> 'fullname'];
    public static $phoneField = ['name'=> 'phone'];
    public static $indexField = ['name'=> 'zip'];
    public static $addressField = ['name' => 'comment'];
    public static $saveButtonFirst = '[data="profile_save"]';

}
