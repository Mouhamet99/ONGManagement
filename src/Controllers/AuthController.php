<?php

namespace App\src\Controllers;

use App\core\Application;

class AuthController extends Controller
{
    public function login(): string
    {
        $this->setLayout('authentication');
        return $this->render('login');
    }
}