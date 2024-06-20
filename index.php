<?php
require_once 'includes/functions.inc.php';
session_start();
?>
<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>کوتاه کننده لینک</title>
    <link rel="stylesheet" href="themes/default/css/style.css">
    <script type="module" src="themes/default/js/script.js" defer></script>
    <script src="themes/default/js/sweetalert2.js"></script>
</head>
<body>
<div class="Wrapper">
    <h1 class="Title">کوتاه کننده لینک :)</h1>
    <form action="includes/url.inc.php" method="post">
        <div class="Input">
            <input type="text" name="url" id="input" class="Input-text"
                   placeholder="https://github.com/sharifloo-net/link-shortener"
                   spellcheck="false" autocomplete="off">
            <label for="input" class="Input-label">:)</label>
        </div>
        <input type="submit" name="shorten" id="btn" value="کوتاه کن">
    </form>
</div>
<?php
$alert = '';
$content = '';
if (isset($_SESSION['emptyInput'])) {
    $alert = alert('فیلد خالی است!', 'لطفا یک لینک وارد کنید', 'warning');
    unset($_SESSION['emptyInput']);
} elseif (isset($_SESSION['graterThanMaxLength'])) {
    $alert = alert('مقدار فیلد بیش از حد مجاز!', 'حداکثر طول لینک، ۵۰۰ کاراکتر است', 'warning');
    $content .= '<script>
            window.onload = () => {
                document.querySelector(`.swal2-confirm`).focus();
                document.body.classList.remove(`swal2-height-auto`);
            }
        </script>';
    unset($_SESSION['graterThanMaxLength']);
} elseif (isset($_SESSION['shortenedUrl'])) {
    $content .= '<div id="shortened-link-container">
    <h2>لینک کوتاه شده:</h2><br>
    <a href="' . $_SESSION['shortenedUrl'] . '" target="_blank">
        <div class="Input">
            <input type="button" class="Input-text" id="shortened-link"
                   spellcheck="false" autocomplete="off" value="' . $_SESSION['shortenedUrl'] . '">
        </div
    </a>
</div>';
    $alert = alert('لینک ایجاد شد‌ :)', 'لینک کوتاه با موفقیت ایجاد شد');
    unset($_SESSION['shortenedUrl']);
}
echo $alert . $content;
?>
</body>
</html>