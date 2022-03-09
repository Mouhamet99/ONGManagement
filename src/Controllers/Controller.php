<?php

namespace App\src\Controllers;

use App\core\Application;
use App\src\Database\DBConnection;

abstract class Controller
{
    private string $layout = 'main';

    protected function render($view): string
    {
        return Application::$app->router->renderView($view);
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