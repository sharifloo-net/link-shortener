document.querySelector('#btn').onclick = () => {
    if (!document.querySelector('#input').value) {
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