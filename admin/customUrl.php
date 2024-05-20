<?php
require_once 'main.php';
require_once 'header.php';
?>
<form action="../includes/customUrl.inc.php" method="post">
    <input type="text" name="originalUrl" placeholder="original link"><br><br>
    <input type="text" name="customShortenedUrl" placeholder="shortened link"><br><br>
    <input type="submit" value="Add a custom link" name="customUrl">
</form>
