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

        return $this->render('home', [
            'companies' => Company::all()
        ]);

    }

    public function addONG(Request $request): string
    {
        $this->isConnected();

        $company = new Company();

        if ($request->isPostRequest()) {
            $data = $request->getBody($company);

            if ($company->validate($data)) {
                $company->persist($data);
                $company->save($data);
            }

            header("Location: /ong");
        }

        return $this->render('newOng', [
            'legal_form_options' => Company::getLegalFormOptions(),
            'communes' => Commune::all()
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
        $company = $company->find($id);
        $commune = new Commune();

        if ($request->getMethod() === "post") {
            $data = $request->getBody($request->getFormData());
            if (true) {

                $newCompany = new Company();
//                $newCompany->persist($data);
//                $dataToUpdate = array();
//                foreach ($company as $key => $value) {
//                    if(isset($data[$key]) && $value != $data[$key]){ $dataToUpdate[$key] = $data[$key];}
//                }
//                return json_encode([$company, $dataToUpdate]);
                $newCompany->persist($data);
                $newCompany->update($id, $data);
            }

            header("Location: /ong");
        }


        if (empty($company)) {
            header('Location: /ong');
        }
        return $this->render('editOng', [
            'company' => $company,
            'sector_options' => Company::getSectorOptions(),
            'legal_form_options' => Company::getLegalFormOptions(),
            'communes' => Commune::all()
        ]);
    }


}