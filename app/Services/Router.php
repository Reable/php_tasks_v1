<?php 

namespace App\Services;

use App\Helpers\RouterHelper;
use App\Helpers\Enums\ERoutesMethod;

class Router extends RouterHelper
{

    /**
     * Parameters for get method
     * @param string $url
     * @param array $callback
     */
    public static function get($url, $callback)
    {
        self::$list[ERoutesMethod::GET->name][] = [
            'url' => $url,
            "callback" => $callback,
            "method" => ERoutesMethod::GET->name
        ]; 
    }

    /**
     * Parameters for post method
     * @param string $url
     * @param array $callback
     */
    public static function post($url, $callback)
    {
        self::$list[ERoutesMethod::POST->name][] = [
            'url' => $url,
            "callback" => $callback,
            "method" => ERoutesMethod::POST->name
        ]; 
    }
}