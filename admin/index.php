<?php
require_once 'main.php';
require_once '../includes/functions.inc.php';
if (isset($_SESSION['firstLogin'])) {
    echo alert('مدیر محترم خوش آمدید :)', 'ورود به پنل مدیریت با موفقیت انجام شد.');
    unset($_SESSION['firstLogin']);
}
$title = 'کوتاه‌کننده لینک سفارشی پنل مدیریت';
$action = '../includes/customUrl.inc.php';
$placeholder = 'عنوان کوتاه شده لینک';
require_once 'header.php';
?>
    <!--    <input type="text" name="originalUrl" placeholder="original link"><br><br>-->
<?php require_once 'footer.php' ?>