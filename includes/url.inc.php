<?php
require_once 'functions.inc.php';

if (post('shorten')) {
    $originalUrl = post('url');
    $shortenedUrl = $rand = substr(md5(microtime()), rand(0, 26), 5);

    require_once '../classes/dbh.class.php';
    require_once '../classes/url.class.php';
    require_once '../classes/urlContr.class.php';

    $url = new urlContr($originalUrl, $shortenedUrl);
    $url->setUrl();
    $dirPath = __DIR__ . "/../$shortenedUrl";
    if (!file_exists($dirPath)) {
        mkdir($dirPath, 0777, true);
    }
    header("location: $dirPath");
//    header("location: ../?shortenedUrl=http://localhost/$shortenedUrl");
} else {
    header('location: ../');
    exit;
}