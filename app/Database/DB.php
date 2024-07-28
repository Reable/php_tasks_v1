<?php 

namespace App\Database;

use App\Helpers\Traits\SingletonTrait;
use App\Database\DBquery;
use PDO;
use PDOException;

class DB{
    use SingletonTrait;

    private $conn;

    public function connect()
    {
        try{
            $this->conn = new PDO("mysql:host=127.0.0.1;port=3306;dbname=php_task_1", "root", "root");
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    /**
     * 
     * @param string $name
     */
    public static function table(string $name)
    {
        return new DBquery($name);
    }

    /**
     * 
     * @param string $sql
     * @param array|object $data
     */
    public function query($sql, $data = "")
    {
        $smtp = $this->conn->prepare($sql);
        $smtp->execute($data);
        return $smtp;
    }

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

}