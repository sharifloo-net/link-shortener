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
            return $this->shortenedUrl;
        if ($this->isShortenedURlExists()) {
            $_SESSION['customShortenedUrlExists'] = 1;
            header('location: ../admin');
            exit;
        }
        if (!$this->isOriginalUrlValid()) {
            $_SESSION['originalUrlInvalid'] = 1;
            header('location: ../admin');
            exit;
        }
        if (!$this->isShortenedUrlValid()) {
            $_SESSION['customShortenedUrlInvalid'] = 1;
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

    private function isOriginalUrlValid(): bool
    {
        $urlLowerCase = strtolower($this->originalUrl);
        if (!str_starts_with($urlLowerCase, 'http://') && !str_starts_with($urlLowerCase, 'https://'))
            $this->originalUrl = 'https://' . $this->originalUrl;
        return (bool)filter_var($this->originalUrl, FILTER_VALIDATE_URL);
    }

    private function isShortenedUrlValid(): bool
    {
        return (bool)preg_match('/^[a-zA-z0-9]{3,100}$/', $this->shortenedUrl);
    }
}