<?php

namespace App\src\Controllers;

use App\core\Application;

class ONGController extends Controller
{
    public function home(): string
    {
        return $this->render('home');
    }

    public function addONG(): string
    {
        return $this->render('ongRegister');
    }

}