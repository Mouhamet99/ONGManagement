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


}