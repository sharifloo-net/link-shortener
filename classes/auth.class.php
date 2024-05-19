<?php

class auth extends config
{
    public function __construct(string $userPass)
    {
        $userPass = explode(':', $userPass);
        if ($this->username !== $userPass[0] || md5($this->password) !== $userPass[1]) {
            header('location: ../admin/logout.php');
            exit;
        }
    }
}