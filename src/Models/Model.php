<?php

namespace App\src\Models;

use App\src\Database\DBConnection;

abstract class Model
{
    protected static DBConnection $db;
    protected $table;

    /**
     * @return mixed
     */
    protected function getTable()
    {
        return $this->table;
    }

    /**
     * @param mixed $table
     */
    public function setTable($table): void
    {
        $this->table = $table;
    }

    public function __construct()
    {
        self::$db = new DBConnection('localhost', 'ong_nous_les_femmes', 'root', '');
    }

    public static function getDB(): DBConnection
    {
        return self::$db;
    }

    public function all()
    {
        $stm = self::$db->getPDO()->query("SELECT * FROM $this->table");
        return $stm->fetchAll();
    }


    public function findById($id, ?string $table)
    {
        $stm = self::$db->getPDO()->query("SELECT * FROM $this->table WHERE id=?");
        $stm->execute($id);
        return $stm->fetch();
    }

    public function find($id)
    {
        $stm = self::$db->getPDO()->prepare("SELECT * FROM $this->table WHERE id=?");
        $stm->execute([$id]);
        return $stm->fetch();
    }

    public function remove($id)
    {
        try {
            $sql = "DELETE FROM $this->table WHERE id=?";
            $stm = self::$db->getPDO()->prepare($sql);
            $stm->execute([$id]);
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
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
        $stmt = self::$db->getPDO()->prepare($sql);
        $stmt->execute(array_values($data));

        return "$this->table Added Successfully";


    }

}