<?php 

namespace App\Database;

use App\Helpers\Traits\SingletonTrait;
use App\Database\DBquery;
use App\Database\Migration;
use PDO;
use PDOException;

class DB{
    use SingletonTrait;

    private $conn;

    public function connect()
    {
        try{
            $this->conn = new PDO("mysql:host=mysql;port=3306;dbname=php_task_1", "user", "password");
        } catch(PDOException $e){
            echo "<pre>";
            print_r($e);
            echo "</pre>";
        }
    }

    /**
     * @param string $name
     */
    public static function table(string $name)
    {
        return new DBquery($name);
    }

    /**
     * @param string $sql
     * @param array|object $data
     */
    public function query($sql, $data = "")
    {
        $smtp = $this->conn->prepare($sql);
        $smtp->execute($data);
        return $smtp;
    }


    /**
    * @param string $sql
    */
    public function query_with_vulnerability($sql)
    {
        try{
            $smtp = $this->conn->query($sql);
            $smtp->execute();
            return $smtp->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e){
            return [
                "error" => $e->getMessage()
            ];
        }
    }

    public function runMigrations()
    {
        Migration::run($this->conn);
    }

}