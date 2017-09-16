<?php
namespace PageObjects;

class Login {
    public static $URL = '/vxod-v-sistemu.html?auth';
    public static $usernameField = ['name' => 'username'];
    public static $passwordField = ['name' => 'password'];
    public static $loginButton = 'Войти';
}