<?php

namespace App\src\Database;

use PDO;

class DBConnection
{
    private string $dbname;
    private string $host;
    private string $username;
    private string $password;
    private $pdo;

    public function __construct(string $host, string $dbname, string $username, string $password)
    {
        $this->dbname = $dbname;
        $this->host = $host;
        $this->password = $password;
        $this->username = $username;
    }

    public  function getPDO(): PDO
    {
        return $this->pdo ?? $this->pdo = new \PDO("mysql:dbname=$this->dbname;host=$this->host", $this->username, $this->password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
    }
}