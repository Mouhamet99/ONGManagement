<?php

namespace App\src\Controllers;

class Controller
{
    private string $layout = 'main';

    public function render(): string
    {
        return 'Render Some View';
    }

    public function getLayout(): string
    {
        return $this->layout;
    }
    public function setLayout($layout): void
    {
        $this->layout = $layout;
    }
}