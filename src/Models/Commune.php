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

    public function save()
    {
//        $attributes = implode(',', array_keys($data));
//        $values = implode(',', array_map((fn($value): string => ':' . $value), array_values($data)));
//
//        $sql = "INSERT INTO $this->table ($attributes) VALUES ($values)";
////    (name, coordinates, commercial_register, sector, website,employee_number, address, Commune_id)
//
//        $stmt = self::$db->getPDO()->prepare($sql);
//        foreach ($data as $name => $value) {
//            $stmt->bindParam(":$name", $value);
//        }
//        $stmt->execute();
//        return self::$db->getPDO()->lastInsertId();


    }
    public function isCommune($id): bool
    {
        $commune = $this->find($id);
        if($commune === false){
            return false;
        }
        return $commune['id'] == $id;
    }


}
