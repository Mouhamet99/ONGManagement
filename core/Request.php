<?php

namespace App\core;

class Request
{

    public function getPath(): string
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');

        if ($position !== false) {
            $path = substr($path, 0, $position);
        }
        return $path;
    }

    public function getMethod(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function idGet(): bool
    {
        return $this->getMethod() === "get";
    }

    public function isPostRequest(): bool
    {
        return $this->getMethod() === "post";
    }
}