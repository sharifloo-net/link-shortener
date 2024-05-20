<?php
session_start();
require_once 'functions.inc.php';
if (post('customUrl')) {
    $originalUrl = post('originalUrl');
    $customShortenedUrl = post('customShortenedUrl');

    require_once '../classes/dbh.class.php';
    require_once '../classes/customUrl.class.php';
    require_once '../classes/customUrlContr.class.php';
    $customUrl = new customUrlContr($originalUrl, $customShortenedUrl);
    $customShortenedUrl = $customUrl->setUrl();
    $_SESSION['shortenedUrl'] = $customShortenedUrl;
    header('location: ../admin/customUrl.php');
} else {
    header('location: ../admin/customUrl.php');
    exit;
}