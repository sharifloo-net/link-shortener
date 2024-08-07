<?php
session_start();
require_once 'functions.inc.php';
if (post('shorten')) {
    $originalUrl = post('url');
    $shortenedUrl = $rand = substr(md5(microtime()), rand(0, 26), 5);
    $originalUrlLength = strlen($originalUrl);
    if ($originalUrlLength > 1000) {
        $_SESSION['graterThanMaxLength'] = 1;
        header('location: ../');
        exit;
    }
    if ($originalUrlLength < 30) {
        $_SESSION['lessThanMinLength'] = 1;
        header('location: ../');
        exit;
    }
    require_once '../classes/dbh.class.php';
    require_once '../classes/url.class.php';
    require_once '../classes/urlContr.class.php';
    $url = new urlContr($originalUrl, $shortenedUrl);
    $shortenedUrl = $url->setUrl();
    $_SESSION['shortenedUrl'] = $shortenedUrl;
    header('location: ../');
} else {
    header('location: ../');
    exit;
}