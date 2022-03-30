<?php

namespace App\src\Models;

use PDO;

class User extends Model
{
    protected $table = 'user';

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return User
     */
    public function setUsername(string $username): User
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return User
     */
    public function setPassword(string $password): User
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getRule(): string
    {
        return $this->rule;
    }

    /**
     * @param string $rule
     * @return User
     */
    public function setRule(string $rule): User
    {
        $this->rule = $rule;
        return $this;
    }

    private string $username = "";
    private string $password = "";
    private string $rule = "";


    public function persist(array &$data)
    {
//        $this->set($data['name']);

    }


    public function getUser(array $data)
    {

        $sql = "SELECT * from $this->table WHERE email = :email AND password = :password";

//      $password = password_hash($data['password'], PASSWORD_BCRYPT);
        $stm = self::$db->getPDO()->prepare($sql);
        $stm->bindParam(':email', $data['username']);
        $stm->bindParam(':password', $data['password']);
        $stm->execute();
        $result = $stm->fetch(PDO::FETCH_ASSOC);
        if (empty($result)) {
            return false;
        }
        $this->username = $result['username'];
        $this->rule = $result['rule'];
        return $result;
    }

    public function connect()
    {


    }

    public function isConnected()
    {
        if (isset($_SESSION['auth']) && $_SESSION['auth']['rule'] === "user") {
            header("Location: /ong");
        } else {
            header("Location: /");
        }
    }
   public static function all()
    {
        $stm = self::$db->getPDO()->query("SELECT * FROM user ");
        return $stm->fetchAll();

   }
}