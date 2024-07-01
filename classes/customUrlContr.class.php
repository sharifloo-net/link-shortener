<?php

class customUrlContr extends customUrl
{
    private string $originalUrl, $shortenedUrl;

    public function __construct($originalUrl, $shortenedUrl)
    {
        $this->originalUrl = $originalUrl;
        $this->shortenedUrl = $shortenedUrl;
    }

    public function setUrl()
    {
        if ($this->emptyInput()) {
            $_SESSION['emptyInput'] = 1;
            header('location: ../admin');
            exit;
        }
        if ($this->isOriginalUrlExists() && $this->isShortenedURlExists())
            return $this->originalUrl;
        if ($this->isShortenedURlExists()) {
            $_SESSION['customShortenedUrlExists'] = 1;
            header('location: ../admin');
            exit;
        }
        $this->insertUrl($this->originalUrl, $this->shortenedUrl);
        return $this->shortenedUrl;
    }

    private function emptyInput(): bool
    {
        if (empty($this->originalUrl) || empty($this->shortenedUrl))
            return true;
        return false;
    }

    private function isOriginalUrlExists()
    {
        return $this->checkOriginalUrl($this->originalUrl);
    }

    private function isShortenedURlExists()
    {
        return $this->checkShortenedUrl($this->shortenedUrl);
    }
}