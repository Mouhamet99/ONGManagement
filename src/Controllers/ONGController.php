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

    public function addOrEditONG(Request $request): string
    {
        $this->isConnected();

        $company = new Company();
        $commune = new Commune();

        if ($request->isPostRequest()) {
            $data = $request->getBody($company);

            if ($company->validate($data)) {
                $company->persist($data);
                $company->save($data);
            }

            header("Location: /ong");
        }

        return $this->render('newOng', [
            'legal_form_options' => $company->getLegalFormOptions(),
            'communes' => $commune->all()
        ]);
    }

    public function removeONG(int $id): string
    {
        $this->isConnected();

        $company = new Company();
        $company->remove($id);

        header('Location: /ong');

    }

    public function editONG(int $id, ?Request $request)
    {

        $this->isConnected();
        $company = new Company();

//        if ($request->getMethod() === "post") {
//            $data = $request->getBody($company);
//
//            if ($company->validate($data)) {
//                $company->persist($data);
//                $company->update($data);
//            }
//
//            header("Location: /ong");
//        }


        $companyToEdit = $company->find($id);
        if (empty($companyToEdit)) {
            header('Location: /ong');
        }
        return $this->render('editOng', [
            'company' => $companyToEdit,
            'sector_options' => $company->getSectorOptions(),
            'legal_form_options' => $company->getLegalFormOptions(),
            'communes' => (new Commune())->all()
        ]);
    }


}