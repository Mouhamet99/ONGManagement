<?php

namespace App\src\Controllers;

use App\core\Application;

abstract class Controller
{
    private string $layout = 'main';

    protected function render($view, array $params = []): string
    {
        return Application::$app->router->renderView($view, $params);
    }

    public function getLayout(): string
    {
        return $this->layout;
    }

    public function setLayout($layout): void
    {
        $this->layout = $layout;
    }

    public function connect(&$user)
    {
        $_SESSION['auth'] = ['username' => $user->getUsername(), 'rule' => $user->getRule()];
        if ($user->getRule() == "user")
            header('Location: /ong/new');
    }

    protected function isConnected()
    {
        if (empty($_SESSION)) {
            header('Location: /');
        }
    }

}