<?php
require_once 'main.php';
require_once '../includes/functions.inc.php';
if (isset($_SESSION['firstLogin'])) {
    echo alert('مدیر محترم خوش آمدید :)', 'ورود به پنل مدیریت با موفقیت انجام شد.');
    unset($_SESSION['firstLogin']);
}
$title = 'کوتاه‌کننده سفارشی | پنل مدیریت';
require_once '../body.php';
?>
<input type="text" name="originalUrl" id="input" class="Input-text"
       placeholder="https://github.com/sharifloo-net/link-shortener"
       spellcheck="false" autocomplete="off">
<label for="input" class="Input-label">:)</label>
<?php require_once '../footer.php' ?>
