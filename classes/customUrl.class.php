<?php

class customUrl extends dbh
{
    protected function insertUrl($originalUrl, $shortenedUrl)
    {
        $sql = 'INSERT INTO url (originalUrl, shortenedUrl) VALUES (?, ?)';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$originalUrl, $shortenedUrl]);
    }

    protected function checkOriginalUrl($originalUrl)
    {
        $sql = 'SELECT shortenedUrl FROM url WHERE originalUrl = ?';
        $stmt = $this->connect()->prepare($sql);
        if (!$stmt->execute([$originalUrl])) {
            $stmt = null;
            header('location: ../admin/?error=stmtFailed');
            exit;
        }
        $urlData = $stmt->fetchAll();
        if ($stmt->rowCount() > 0) return $urlData[0]['shortenedUrl'];
        return false;
    }
}