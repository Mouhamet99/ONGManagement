<?php

namespace App\src\Controllers;

use App\core\Application;

class AuthController extends Controller
{
    public function login(): string
    {
        return $this->render('login');
    }
}