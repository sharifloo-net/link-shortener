const input = document.querySelector('#input');

input.focus();

document.querySelector('#btn').onclick = () => {
    if (!input.value) {
        Swal.fire({
            title: 'فیلد خالی است!',
            text: 'لطفا یک لینک وارد کنید',
            icon: 'warning',
            confirmButtonText: 'باشه'
        });

        // sweetalert2 config. (for keeping body height 100%)
        document.body.classList.remove('swal2-height-auto');
        return false;
    }
}
try {
    document.querySelector('.swal2-confirm').focus();
} catch {
}