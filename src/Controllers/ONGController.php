<?php

namespace App\src\Controllers;

use App\core\Request;
use App\src\Models\Commune;
use App\src\Models\Company;

class ONGController extends Controller
{
    public function home(): string
    {
        $this->isConnected();

        $company = new Company();
        $companies = $company->all();

        return $this->render('home', [
            'companies' => $companies
        ]);

    }

    public function addONG(Request $request): string
    {
        $this->isConnected();

        $company = new Company();
        $commune = new Commune();
        $communes = $commune->all();
        $legalformOptions = $company->getLegalFormOptions();

        if ($request->isPostRequest()) {
            $data = $request->getBody($company);

            if ($company->validate($data)) {

                $company->persist($data);
                $company->save($data);
            }
            header("Location: /ong");
        }

        return $this->render('newOng', [
            'legal_form_options' => $legalformOptions,
            'communes' => $communes
        ]);
    }

    public function removeONG(int $id): string
    {
        $this->isConnected();

        $company = new Company();
        $company->remove($id);

        header('Location: /ong');

    }

    public function editONG(int $id)
    {
        echo "EDIT" . $id;
    }


}