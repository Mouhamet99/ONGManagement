<?php

namespace App\src\Controllers;

use App\core\Request;
use App\src\Database\DBConnection;
use App\src\Models\CompanyModel;

class ONGController extends Controller
{
    public function home(): string
    {
//        $db = new DBConnection('localhost', 'ong_nous_les_femmes','root', '');
//        $req = $db->getPDO()->query("SELECT * FROM region");
//        $regions = $req->fetchAll();
//        var_dump($region);
//        return json_encode($regions);

        $companyModel = new CompanyModel();
        $companies = $companyModel->all();
        return json_encode($companies);
        return $this->render('home');
    }

    public function addONG(Request $request): string
    {
        if ($request->isPostRequest()) {
            return 'Form Submitted';
        }

        return $this->render('newOng');
    }



}