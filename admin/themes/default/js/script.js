const $ = document,
    select = (selectors) => $.querySelector(selectors),
    swAlert = (title, text, icon = 'success', confirm = 'باشه') => {
        return Swal.fire({
            title: title,
            text: text,
            icon: icon,
            confirmButtonText: confirm
        });
    };
try {
    const username = select('#login__username');
    username.focus();
    select('#login-btn').onclick = () => {
        if (!username.value || !select('#login__password').value) {
            swAlert('فیلد خالی است!', 'لطفا نام‌کاربری و گذرواژه را وارد کنید.', 'warning');

            // sweetalert2 config. (for keeping body height 100%)
            $.body.classList.remove('swal2-height-auto');
            return false;
        }
    }
} catch {
}
try {
    const originalUrl = select('#originalUrlInput'), customShortenedUrl = select('#input');
    select('#btn').onclick = () => {
        if (!originalUrl.value || !customShortenedUrl.value) {
            swAlert('فیلد خالی است!', 'لطفا همه فیلدها را پر کنید.', 'warning');
            return false;
        }
        if (originalUrl.value.length > 1000) {
            swAlert('مقدار فیلد بیش از حد مجاز!', 'حداکثر طول لینک ۱۰۰۰ کاراکتر است.', 'warning');
            return false;
        }
        if (customShortenedUrl.value.length > 100) {
            swAlert('مقدار فیلد بیش از حد مجاز!', 'حداکثر طول لینک کوتاه شده ۱۰۰ کاراکتر است.', 'warning');
            return false;
        }
        if (!customShortenedUrl.value.match(/^[a-zA-Z0-9]{3,100}$/)) {
            swAlert('عنوان کوتاه شده معتبر نمی‌باشد!', 'عنوان فقط می‌تواند شامل حروف a تا z و اعداد 0 تا 9 باشد.', 'warning');
            return false;
        }
    }
} catch {
}
try {
    select('.swal2-confirm').focus();
} catch {
}