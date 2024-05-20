<?php
session_start();
if (isset($_SESSION['userPass']) || isset($_COOKIE['userPass'])) {
    require_once '../classes/config.class.php';
    require_once '../classes/auth.class.php';
    $userPass = $_SESSION['userPass'] ?? $_COOKIE['userPass'];
    $auth = new auth($userPass);
} else {
    header('location: login.php');
    exit;
}