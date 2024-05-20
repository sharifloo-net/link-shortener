<?php

class dbh
{
    protected function connect()
    {
        try {
            $servername = 'localhost';
            $dbname = 'link-shortener';
            $username = 'root';
            $password = '//comment!';
            $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8mb4";
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}