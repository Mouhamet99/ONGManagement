<?php

namespace App\src\Controllers;

use App\core\Application;

class AuthController extends Controller
{
    public function login(): string
    {
        return Application::$app->router->renderOnlyView('login');
    }
}