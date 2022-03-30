<?php

namespace App\src\Models;

class Commune extends Model
{
    protected $table = 'commune';
    private string $name = "";
    public static Commune $commune;

    public function __construct()
    {
        parent::__construct();
        self::$commune = $this;
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


    public function validate(array $data)
    {
        return true;
    }

    public function isCommune($id): bool
    {
        $commune = $this->find($id);
        if ($commune === false) {
            return false;
        }
        return $commune['id'] == $id;
    }

    public static function all()
    {
        $stm = self::$db->getPDO()->query("SELECT * FROM commune ");
        return $stm->fetchAll();

    }

}
