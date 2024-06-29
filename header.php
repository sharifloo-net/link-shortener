<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
    <link rel="stylesheet"
          href="<?php echo str_contains($_SERVER['REQUEST_URI'], 'admin') ? '../' : ''; ?>themes/default/css/style.css">
    <script src="themes/default/js/script.js" defer></script>
    <script src="themes/default/js/sweetalert2.js"></script>
</head>
<body>
