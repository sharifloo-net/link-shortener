<?php
session_start();
if (isset($_SESSION['userPass']))
    unset($_SESSION['userPass']);
elseif (isset($_COOKIE['userPass']))
    setcookie('userPass', '', time() - 1209600);
header('location: login.php');
exit;