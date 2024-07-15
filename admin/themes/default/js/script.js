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
    select('#btn').onclick = () => {
        if (!select('#originalUrlInput').value || !select('#input').value) {
            swAlert('فیلد خالی است!', 'لطفا همه فیلدها را پر کنید.', 'warning');
            return false;
        }
    }
} catch {
}
try {
    select('.swal2-confirm').focus();
} catch {
}