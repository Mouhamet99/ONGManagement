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

    public function getBody($model): array
    {
        $body = [];
        if ($this->getMethod() === 'get') {
            foreach ($_GET as $key => $value) {
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }
        }
        if ($this->getMethod() === 'post') {
            foreach ($_POST as $key => $value) {
                if (property_exists($model, $key)) {
                    $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                }
            }
        }

        return $body;
    }
}