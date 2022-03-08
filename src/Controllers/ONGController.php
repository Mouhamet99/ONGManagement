<?php

namespace App\src\Controllers;

use App\core\Request;

class ONGController extends Controller
{
    public function home(): string
    {
        return $this->render('home');
    }

    public function addONG(Request $request): string
    {
        if($request->isPostRequest()){
            return 'Form Submitted';
        }

        return $this->render('newOngForm');
    }

}