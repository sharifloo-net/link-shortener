<?php

class redirect extends dbh
{
    private string $shortenedUrl;

    public function __construct($shortenedUrl)
    {
        $this->shortenedUrl = $shortenedUrl;
    }

    public function getOriginalUrl()
    {
        $sql = 'SELECT originalUrl FROM url WHERE shortenedUrl = ?';
        $stmt = $this->connect()->prepare($sql);
        if (!$stmt->execute([$this->shortenedUrl])) {
            $stmt = null;
            header('location: ../?error=stmtFailed');
            exit;
        }
        if ($stmt->rowCount() > 0) {
            $urlData = $stmt->fetchAll();
            $originalUrl = $urlData[0]['originalUrl'];
            header("location: $originalUrl");
            exit;
        }
        session_start();
        $_SESSION['notFound'] = 1;
    }
}