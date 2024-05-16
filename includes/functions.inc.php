<?php
function post($postedVal): string|null
{
    return $_POST[$postedVal] ?? null;
}

function get($gotVal): string|null
{
    return $_GET[$gotVal] ?? null;
}