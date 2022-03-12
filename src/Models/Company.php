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
    private string $legal_form = "Entreprise unipersonnelle à responsabilité limitée (EURL)";
    private int $Commune_id;

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


    public function validate(array $data)
    {
        return true;
    }

    public function save($data)
    {
        $attributes = implode(',', array_keys($data));
        $params = implode(',', array_map((fn($value): string => '?'), $data));
        $sql = "INSERT INTO {$this->table} ({$attributes}) VALUES ($params)";
//        echo "(name, coordinates, created_at, commercial_register, sector, website,employee_number, address, Commune_id, legal_form)";
//        die(print_r($data));
        $stmt = self::$db->getPDO()->prepare($sql);
        $stmt->execute(array_values($data));
        return "COmpany Added Successfully";
//        return self::$db->getPDO()->lastInsertId();


    }


}
