<?php 

namespace App\Helpers\Traits;

trait SingletonTrait
{
    private static $instance = null;

    public static function getInstance(){
        return self::$instance ?? (self::$instance = new static());
    }

    private function __construct(){}
    private function __clone(){}
    public function __wakeup(){}
}