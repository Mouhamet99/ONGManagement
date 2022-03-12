<?php

namespace App\src\Controllers;

use App\core\Request;
use App\src\Models\Commune;
use App\src\Models\Company;

class ONGController extends Controller
{
    public function home(): string
    {
//        $db = new DBConnection('localhost', 'ong_nous_les_femmes','root', '');
//        $req = $db->getPDO()->query("SELECT * FROM region");
//        $regions = $req->fetchAll();
//        var_dump($region);
//        return json_encode($regions);

        $company = new Company();
        $companies = $company->all();
        return json_encode($companies);
        return $this->render('home');
    }

    public function addONG(Request $request): string
    {
        $company = new Company();

        if ($request->isPostRequest()) {
            $data = $request->getBody($company);

            if ($company->validate($data)) {

                $company->setName($data['name']);
                $company->setAddress($data['address']);
                $company->setCommercialRegister($data['commercial_register']);
                $company->setCoordinates($data['coordinates']);
                $company->setEmployeeNumber(intval($data['employee_number']));
                $company->setWebsite($data['website']);
                $company->setLegalForm($data['legal_form']);
                $commune = new Commune();
//                $id = Commune::$commune->isCommune(intval($data['commune_id']));
                $commune_exists = Commune::$commune->isCommune(1);
                if($commune_exists === false){
                    die('Commune Existant, Veillez Bien choisir une commune existantes');
                }
                $company->setCommuneId(1);
                $company->save($data);

//                echo 'The publisher id ' . $publisher_id . ' was inserted';
            }
            return 'Form Submitted';
        }

        return $this->render('newOng');
    }


}