<?php

namespace App\src\Controllers;

use App\core\Application;

class ONGController extends Controller
{
    public function home()
    {
        return Application::$app->router->renderView('home');
    }

    public function addONG()
    {
          return Application::$app->router->renderView('ongRegister');
    }

}