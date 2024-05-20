<?php
session_start();
$isInLogin = str_contains($_SERVER['REQUEST_URI'], 'login.php');
if (isset($_SESSION['userPass']) || isset($_COOKIE['userPass'])) {
    require_once '../classes/config.class.php';
    require_once '../classes/auth.class.php';
    $userPass = $_SESSION['userPass'] ?? $_COOKIE['userPass'];
    $auth = new auth($userPass);
    if ($isInLogin) {
        header('location: ./');
        exit;
    }
} else if (!$isInLogin) {
    header('location: login.php');
    exit;
}