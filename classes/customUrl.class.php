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
        $sql = 'SELECT originalUrl FROM url WHERE originalUrl = ?';
        $stmt = $this->connect()->prepare($sql);
        if (!$stmt->execute([$originalUrl])) {
            $stmt = null;
            header('location: ../admin/?error=stmtFailed');
            exit;
        }
        $urlData = $stmt->fetchAll();
        if ($stmt->rowCount() > 0) return (bool)$urlData[0]['originalUrl'];
        return false;
    }

    protected function checkShortenedUrl($shortenedUrl)
    {
        $sql = 'SELECT shortenedUrl FROM url WHERE shortenedUrl = ?';
        $stmt = $this->connect()->prepare($sql);
        if (!$stmt->execute([$shortenedUrl])) {
            $stmt = null;
            header('location: ../admin/?error=stmtFailed');
            exit;
        }
        $urlData = $stmt->fetchAll();
        if ($stmt->rowCount() > 0) return (bool)$urlData[0]['shortenedUrl'];
        return false;
    }
}