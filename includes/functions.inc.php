<?php
function post($postedVal): string|null
{
    return $_POST[$postedVal] ?? null;
}

function get($gotVal): string|null
{
    return $_GET[$gotVal] ?? null;
}

function alert(string $title, string $text, string $icon = 'success', string $confirmButtonText = 'باشه'): string
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

function isItInAdminPanel(bool $isInAdminPanel, string $ifItIs, string $ifItIsNot): string
{
    return $isInAdminPanel ? $ifItIs : $ifItIsNot;
}