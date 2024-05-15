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
            header('location: ../?error=emptyInput');
            exit;
        }
        if ($this->isUrlExists()) {
            header("location: ../?error=urlExists&shortenedUrl=$this->shortenedUrl");
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

    private function isUrlExists()
    {
        $url = $this->checkUrl($this->originalUrl);
        if ($url) return $url;
        return false;
    }
}