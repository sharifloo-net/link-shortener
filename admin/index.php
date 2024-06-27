<?php
require_once 'main.php';
require_once '../includes/functions.inc.php';
require_once 'header.php';
if (isset($_SESSION['firstLogin'])) {
    echo alert('مدیر محترم خوش آمدید :)', 'ورود به پنل مدیریت با موفقیت انجام شد.');
    unset($_SESSION['firstLogin']);
}
?>
    <form action="../includes/customUrl.inc.php" method="post">
        <input type="text" name="originalUrl" placeholder="original link"><br><br>
        <input type="text" name="customShortenedUrl" placeholder="shortened link"><br><br>
        <input type="submit" value="Add a custom link" name="customUrl">
    </form>
    <br><br>
    [<a href="logout.php">Logout</a>]
<?php require_once 'footer.php' ?>