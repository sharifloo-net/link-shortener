<?php
require_once '../classes/auth.class.php';
if (isset($_SESSION['userPass']) || isset($_COOKIE['userPass'])) {
    session_start();
    $userPass = $_SESSION['userPass'] ?? $_COOKIE['userPass'];
    new auth($userPass);
} else {
    header('location: login.php');
    exit;
}