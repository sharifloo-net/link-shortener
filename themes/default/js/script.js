const input = document.querySelector('#input'),
    swAlert = (title, text, icon = 'success', confirm = 'باشه') => {
        return Swal.fire({
            title: title,
            text: text,
            icon: icon,
            confirmButtonText: confirm
        });
    };

input.focus();

document.querySelector('#btn').onclick = () => {
    if (!input.value) {
        swAlert('فیلد خالی است!', 'لطفا یک لینک وارد کنید.', 'warning');

        // sweetalert2 config. (for keeping body height 100%)
        document.body.classList.remove('swal2-height-auto');
        return false;
    }
    let inputLength = input.value.length;
    if (inputLength > 1000) {
        swAlert('مقدار بیش از حد مجاز!', 'حداکثر طول لینک ۱۰۰۰ کاراکتر است. ', 'warning');
        return false;
    }
    if (inputLength < 30) {
        swAlert('لینک خیلی کوتاه است!', 'حداقل طول لینک ۳۰ کاراکتر است.', 'warning');
        return false;
    }
}
try {
    document.querySelector('.swal2-confirm').focus();
} catch {
}