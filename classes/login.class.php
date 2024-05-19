<?php

class login extends config
{
    public function __construct(string $username, string $hashedPassword)
    {
        if ($this->username !== $username || md5($this->password) !== $hashedPassword) {
            header('location: ../admin/login.php?error=wrongPasswordOrUsername');
            exit;
        }
    }
}