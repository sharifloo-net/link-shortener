<?php
function post($postedVal): string|null
{
    return $_POST[$postedVal] ?? null;
}

function get($gotVal): string|null
{
    return $_GET[$gotVal] ?? null;
}

function alert(string $title, string $text, string $icon = 'success', string $confirmButtonText = 'باشه')
{
    return "<script>
        Swal.fire({
            title: '$title',
            text: '$text',
            icon: '$icon',
            confirmButtonText: '$confirmButtonText'
        });
    </script>";
}