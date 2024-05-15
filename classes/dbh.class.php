<?php
class dbh
{
    protected function connect()
    {
        try {
            $servername = 'localhost';
            $dbname = 'shortUrl';
            $username = 'root';
            $password = '//comment!';
            $dsn = "mysql:host=$servername;dbname=$dbname";
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}