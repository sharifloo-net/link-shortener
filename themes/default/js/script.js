document.querySelector('#btn').onclick = () => {
    if (!document.querySelector('#input').value) {
        Swal.fire({
            title: 'فیلد خالی است!',
            text: 'لطفا یک لینک وارد کنید',
            icon: 'warning',
        });
        return false;
    }
}