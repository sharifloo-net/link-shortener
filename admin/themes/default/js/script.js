const $ = document,
    select = (item) => $.querySelector(item),
    username = select('#login__username');
username.focus();
select('#login-btn').onclick = () => {
    if (!username.value || !select('#login__password').value) {
        Swal.fire({
            title: 'فیلد خالی است!',
            text: 'لطفا نام‌کاربری و گذرواژه را وارد کنید.',
            icon: 'warning',
            confirmButtonText: 'باشه'
        });

        // sweetalert2 config. (for keeping body height 100%)
        $.body.classList.remove('swal2-height-auto');
        return false;
    }
}
try {
    select('.swal2-confirm').focus();
} catch {
}