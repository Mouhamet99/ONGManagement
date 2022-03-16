<?php

namespace App\core;

class Request
{
    private string $realPath = '';

    public function getPath(): string
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        if ($position !== false) {
            $path = substr($path, 0, $position);
        }


        $pattern = '/(edit|remove)\/\d+$/';
        $result = preg_match($pattern, $path, $matches);
        if ($result === 1) {
            $this->setRealPath($path);
            $path = "/ong/$matches[1]/id";
        }


        return $path;
    }


    /**
     * @return string
     */
    public function getRealPath(): string
    {
        return $this->realPath;
    }

    /**
     * @param string $realPath
     * @return Request
     */
    public function setRealPath(string $realPath): Request
    {
        $this->realPath = $realPath;
        return $this;
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