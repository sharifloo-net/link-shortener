<?php
require_once 'functions.inc.php';
if (get('code')) {
    require_once '../classes/dbh.class.php';
    require_once '../classes/redirect.class.php';
    $shortenedUrl = get('code');
    $redirect = new redirect($shortenedUrl);
    $redirect->getOriginalUrl();
} else {
    header('location: ../');
    exit;
}
