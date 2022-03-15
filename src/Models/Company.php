<?php

namespace App\src\Models;

class Company extends Model
{
    protected $table = 'company';
    private string $name = "";
    private string $coordinates = "";
    private string $commercial_register = "";
    private string $sector = "";
    private string $website = "";
    private int $employee_number = 0;
    private string $address = "";
    private string $legal_form = 'Entreprise unipersonnelle à responsabilité limitée (EURL)';
    private int $Commune_id;
    protected array $legal_form_options = array(
        'EURL' => 'Entreprise unipersonnelle à responsabilité limitée (EURL)',
        'SARL' => 'Société à responsabilité limitée (SARL)',
        'SA' => 'Société anonyme (SA)',
        'SNC' => 'Société par actions simplifiée (SAS)',
        'SNC' => 'Société en nom collectif (SNC)',
        'SCOP' => 'Société coopérative de production (SCOP)',
        'SCA' => 'Société en commandite par actions (SCA)'
    );

    private bool $organization_chart = false;
    private bool $contract = false;
    private bool $training_device = false;
    private bool $social_contribution = false;

    /**
     * @return bool
     */
    public function isOrganizationChart(): bool
    {
        return $this->organization_chart;
    }

    /**
     * @param bool $organization_chart
     * @return Company
     */
    public function setOrganizationChart(bool $organization_chart): Company
    {
        $this->organization_chart = $organization_chart;
        return $this;
    }

    /**
     * @return bool
     */
    public function isContract(): bool
    {
        return $this->contract;
    }

    /**
     * @param bool $contract
     * @return Company
     */
    public function setContract(bool $contract): Company
    {
        $this->contract = $contract;
        return $this;
    }

    /**
     * @return bool
     */
    public function isTrainingDevice(): bool
    {
        return $this->training_device;
    }

    /**
     * @param bool $training_device
     * @return Company
     */
    public function setTrainingDevice(bool $training_device): Company
    {
        $this->training_device = $training_device;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSocialContribution(): bool
    {
        return $this->social_contribution;
    }

    /**
     * @param bool $social_contribution
     * @return Company
     */
    public function setSocialContribution(bool $social_contribution): Company
    {
        $this->social_contribution = $social_contribution;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCoordinates(): string
    {
        return $this->coordinates;
    }

    /**
     * @param string $coordinates
     */
    public function setCoordinates(string $coordinates): void
    {
        $this->coordinates = $coordinates;
    }

    /**
     * @return string
     */
    public function getCommercialRegister(): string
    {
        return $this->commercial_register;
    }

    /**
     * @param string $commercial_register
     */
    public function setCommercialRegister(string $commercial_register): void
    {
        $this->commercial_register = $commercial_register;
    }

    /**
     * @return string
     */
    public function getSector(): string
    {
        return $this->sector;
    }

    /**
     * @param string $sector
     */
    public function setSector(string $sector): void
    {
        $this->sector = $sector;
    }

    /**
     * @return string
     */
    public function getWebsite(): string
    {
        return $this->website;
    }

    /**
     * @param string $website
     */
    public function setWebsite(string $website): void
    {
        $this->website = $website;
    }

    /**
     * @return int
     */
    public function getEmployeeNumber(): int
    {
        return $this->employee_number;
    }

    /**
     * @param int $employee_number
     */
    public function setEmployeeNumber(int $employee_number): void
    {
        $this->employee_number = $employee_number;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getLegalForm(): string
    {
        return $this->legal_form;
    }

    /**
     * @param string $legal_form
     */
    public function setLegalForm(string $legal_form): void
    {
        $this->legal_form = $legal_form;
    }

    /**
     * @return array
     */
    public function getLegalFormOptions(): array
    {
        return $this->legal_form_options;
    }

    /**
     * @param string $option
     */
    public function setLegalFormOption(string $option): void
    {
        $this->legal_form = $this->legal_form_options[$option];
    }


    /**
     * @return int
     */
    public function getCommuneId(): int
    {
        return $this->Commune_id;
    }

    /**
     * @param int $Commune_id
     */
    public function setCommuneId(int $Commune_id): void
    {
        $this->Commune_id = $Commune_id;
    }

    public function persist(array &$data)
    {
        $this->setName($data['name']);
        $this->setAddress($data['address']);
        $this->setCoordinates($data['coordinates']);
        $this->setCommercialRegister($data['commercial_register']);
        $this->setEmployeeNumber(intval($data['employee_number']));
        $this->setWebsite($data['website']);

        $this->setLegalFormOption($data['legal_form']);
        $data['contract'] = $data['contract'] === "true";
        $data['organization_chart'] = $data['organization_chart'] === "true";
        $data['training_device'] = $data['training_device'] === "true";
        $data['social_contribution'] = $data['social_contribution'] === "true";
        $data['legal_form'] = $this->getLegalForm();

        $this->setContract($data['contract']);
        $this->setOrganizationChart($data['organization_chart']);
        $this->setTrainingDevice($data['training_device']);
        $this->setSocialContribution($data['social_contribution']);

        $isCommuneExists = Commune::$commune->isCommune(intval($data['Commune_id']));
        if ($isCommuneExists === false) {
            die('Commune non existante, Veillez Bien choisir une commune existante');
        }
        $this->setCommuneId(intval($data['Commune_id']));
    }


}
