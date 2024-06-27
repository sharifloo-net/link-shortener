<?php
if (str_contains($_SERVER['REQUEST_URI'], 'admin'))
    $isInAdminPanel = true;
else $isInAdminPanel = false;
?>
<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo isItInAdminPanel($isInAdminPanel, 'پنل مدیریت', 'کوتاه کننده لینک') ?></title>
    <link rel="stylesheet" href="../themes/default/css/style.css">
    <script src="themes/default/js/script.js" defer></script>
    <script src="themes/default/js/sweetalert2.js"></script>
</head>
<body class="align">
<div class="Wrapper">
    <h1 class="Title"> <?php echo isItInAdminPanel($isInAdminPanel, 'کوتاه کننده سفارشی لینک :)', 'کوتاه کننده لینک :)') ?></h1>
    <form action="<?php echo isItInAdminPanel($isInAdminPanel, '../includes/customUrl.inc.php', 'includes/url.inc.php') ?>"
          method="post">