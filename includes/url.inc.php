<?php
require_once 'functions.inc.php';
if (post('shorten')) {
    $originalUrl = post('url');
    $shortenedUrl = $rand = substr(md5(microtime()), rand(0, 26), 5);
    $url = new urlContr($originalUrl, $shortenedUrl);
    $url->setUrl();
    header("location: ../?shortenedUrl=http://localhost/$shortenedUrl");
} else {
    header('location: ../');
    exit;
}