<?php 

namespace App\Database;

use App\Services\Response;
use PDO;

class DBquery
{
    private string $name;
    private string $select = "*";
    private array $where = [
        "sql" => "",
        "data" => []
    ];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function select(...$data)
    {
        $this->select = $data ? implode(", ", $data) : "*" ;
        return $this;
    }

    public function where($data)
    {
        $sql = array_map(function($key){
            return "$key" . " = :$key";
        }, array_keys($data));

        $this->where = [
            "sql" => " WHERE " . implode(", ", $sql),
            "data" => $data
        ];

        return $this;
    }

    public function get()
    {
        $sql = "SELECT $this->select FROM $this->name" . $this->where["sql"];

        if(isset($this->where["data"])){
            return DB::getInstance()->query($sql, $this->where["data"])->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return DB::getInstance()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function insert($data)
    {
        $keys = implode(", ", array_keys($data));
        $keys_for_values = implode(", :", array_keys($data));
        $query = "INSERT INTO $this->name ($keys) VALUES (:$keys_for_values)";
        return DB::getInstance()->query($query, $data);
    }
}