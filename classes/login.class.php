<?php

class login extends config
{
    public function __construct(string $username, string $hashedPassword)
    {
        if (parent::$USERNAME !== $username || md5(parent::$PASSWORD) !== $hashedPassword) {
            header('location: ../admin/login.php?error=wrongPasswordOrUsername');
            exit;
        }
    }
}