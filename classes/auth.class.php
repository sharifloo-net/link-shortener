<?php

class auth extends config
{
    private string $username = 'admin', $password = '1234';


    public function __construct(string $userPass)
    {
        $userPassArr = explode(':', $userPass);
        if (parent::$USERNAME !== $userPassArr[0] || md5(parent::$PASSWORD) !== $userPassArr[1]) {
            header('location: logout.php');
            exit;
        }
    }
}