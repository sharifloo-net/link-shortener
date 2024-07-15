<input type="text" name="<?php echo isItInAdminPanel($isInAdminPanel, 'customShortenedUrl', 'url') ?>" id="input"
       class="Input-text"
       placeholder="<?php echo isItInAdminPanel($isInAdminPanel, 'عنوان کوتاه شده لینک', 'https://github.com/sharifloo-net/link-shortener') ?>"
       spellcheck="false" autocomplete="off">
<label for="input" class="Input-label">:)</label>
</div>
<input type="submit" name="<?php echo isItInAdminPanel($isInAdminPanel, 'customUrl', 'shorten') ?>" id="btn"
       value="کوتاه کن">
</form>
</div>
<?php
$alert = '';
$content = '';
if (isset($_SESSION['emptyInput'])) {
    $alert = alert('فیلد خالی است!', 'لطفا یک لینک وارد کنید', 'warning');
    unset($_SESSION['emptyInput']);
} elseif (isset($_SESSION['originalUrlInvalid'])) {
    $alert = alert('لینک نامعتبر است!', 'لطفا یک لینک معتبر وارد کنید.', 'warning');
    unset($_SESSION['originalUrlInvalid']);
} elseif (isset($_SESSION['graterThanMaxLength'])) {
    $alert = alert('مقدار فیلد بیش از حد مجاز!', 'حداکثر طول لینک، ۱۰۰۰ کاراکتر است', 'warning');
    $content .= '<script>
            window.onload = () => {
                document.querySelector(`.swal2-confirm`).focus();
                document.body.classList.remove(`swal2-height-auto`);
            }
        </script>';
    unset($_SESSION['graterThanMaxLength']);
} elseif (isset($_SESSION['graterThanMaxLengthCustomUrl'])) {
    $alert = alert('مقدار فیلد بیش از حد مجاز!', 'حداکثر طول لینک کوتاه شده ۱۰۰ کاراکتر است.', 'warning');
    $content .= '<script>
            window.onload = () => {
                document.querySelector(`.swal2-confirm`).focus();
                document.body.classList.remove(`swal2-height-auto`);
            }
        </script>';
    unset($_SESSION['graterThanMaxLengthCustomUrl']);
} elseif (isset($_SESSION['shortenedUrl'])) {
    $content .= '<div id="shortened-link-container">
    <h2>لینک کوتاه شده:</h2><br>
    <a href="' . isItInAdminPanel($isInAdminPanel, '../', '') . $_SESSION['shortenedUrl'] . '" target="_blank">
        <div class="Input">
            <input type="button" class="Input-text" id="shortened-link"
                   spellcheck="false" autocomplete="off" value="https://localhost/link-shortener/' . $_SESSION['shortenedUrl'] . '">
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