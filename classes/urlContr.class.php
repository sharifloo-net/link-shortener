<?php

class urlContr extends url
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
            session_start();
            $_SESSION['emptyInput'] = 1;
            header('location: ../');
            exit;
        }
        if ($this->isUrlExists())
            return $this->shortenedUrl;
        $this->insertUrl($this->originalUrl, $this->shortenedUrl);
        return $this->shortenedUrl;
    }

    private function emptyInput(): bool
    {
        if (empty($this->originalUrl) || empty($this->shortenedUrl))
            return true;
        return false;
    }

    private function isUrlExists()
    {
        $url = $this->checkUrl($this->originalUrl);
        if ($url) {
            $this->shortenedUrl = $url;
            return $url;
        }
        return false;
    }
}