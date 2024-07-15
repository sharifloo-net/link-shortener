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
    if (input.value.length > 1000) {
        swAlert('مقدار بیش از حد مجاز!', 'حداکثر طول لینک ۱۰۰۰ کاراکتر است. ', 'warning');
        return false;
    }
}
try {
    document.querySelector('.swal2-confirm').focus();
} catch {
}