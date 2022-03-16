<?php

namespace App\src\Controllers;

use App\core\Application;
use App\core\Request;
use App\src\Models\User;

class AuthController extends Controller
{

    public function logout()
    {
        if (isset($_SESSION)) {
            session_destroy();
        }
        header("Location: /");
    }

    public function login(Request $request): string
    {
        if ($request->isPostRequest()) {
            $user = new User();

            $userData = $request->getBody($user);
            $user->getUser($userData);

            if ($user->getUsername() === "") {
                echo "false credentials";
                return Application::$app->router->renderOnlyView('login', ['error' => true]);
            }

            $_SESSION['auth'] = ['username' => $user->getUsername(), 'rule' => $user->getRule()];

            if ($user->getRule() == "user") {
                header('Location: /ong');
            }
        }
        return Application::$app->router->renderOnlyView('login');
    }

}