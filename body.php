<?php
$uri = $_SERVER['REQUEST_URI'];
if (str_contains($uri, 'admin'))
    $isInAdminPanel = true;
else $isInAdminPanel = false;
require_once 'header.php';
?>
<div class="Wrapper">
    <h1 class="Title"> <?php echo isItInAdminPanel($isInAdminPanel, 'کوتاه کننده سفارشی لینک :)', 'کوتاه کننده لینک :)') ?></h1>
    <form action="<?php echo isItInAdminPanel($isInAdminPanel, '../includes/customUrl.inc.php', 'includes/url.inc.php') ?>"
          method="post">