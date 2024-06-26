<?php
require_once 'main.php';
require_once '../includes/functions.inc.php';
require_once 'header.php';
if (isset($_SESSION['firstLogin'])) {
    echo alert('مدیر محترم خوش آمدید :)', 'ورود به پنل مدیریت با موفقیت انجام شد.');
    unset($_SESSION['firstLogin']);
}
?>
    <h1>Welcome dear admin :)</h1>
    [<a href="customUrl.php">Add a custom shortened link</a>]
    <br><br>
    [<a href="logout.php">Logout</a>]
<?php require_once 'footer.php' ?>