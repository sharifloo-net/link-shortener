<?php
session_start();
require_once 'functions.inc.php';
if (post('login')) {
    $username = post('username');
    $password = md5(post('password'));
    $remember = post('remember');
    require_once '../classes/config.class.php';
    require_once '../classes/login.class.php';
    $login = new login($username, $password);
    if ($remember)
        setcookie('userPass', "$username:$password", time() + 1209600, '/link-shortener/admin');
    else
        $_SESSION['userPass'] = "$username:$password";
    $_SESSION['firstLogin'] = true;
    header('location: ../admin/');
} else {
    header('location: ../admin/login.php');
    exit;
}
