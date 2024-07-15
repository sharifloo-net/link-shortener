<?php
session_start();
require_once 'functions.inc.php';
if (post('customUrl')) {
    $originalUrl = post('originalUrl');
    $customShortenedUrl = post('customShortenedUrl');
    if (strlen($originalUrl) > 1000) {
        $_SESSION['graterThanMaxLength'] = 1;
        header('location: ../admin');
        exit;
    }
    if (strlen($customShortenedUrl) > 100) {
        $_SESSION['graterThanMaxLengthCustomUrl'] = 1;
        header('location: ../admin');
        exit;
    }
    require_once '../classes/dbh.class.php';
    require_once '../classes/customUrl.class.php';
    require_once '../classes/customUrlContr.class.php';
    $customUrl = new customUrlContr($originalUrl, $customShortenedUrl);
    $customShortenedUrl = $customUrl->setUrl();
    $_SESSION['shortenedUrl'] = $customShortenedUrl;
    header('location: ../admin/');
} else {
    header('location: ../admin/');
    exit;
}