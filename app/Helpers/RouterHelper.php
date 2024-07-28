<?php 

namespace App\Helpers;

use App\Services\Page;

class RouterHelper {
    protected static $list = [];

    public static function listen()
    {
        $url = $_GET["q"];
        foreach (self::$list as $method_name => $method) {
            foreach ($method as $route) {
                if(
                    (string) $route["url"]    === (string) $url &&                      // проверка совпадения url
                    (string) $route["method"] === (string) $method_name &&              // проверка совпадения метода c методом из массива ( можно еще доработать кнш)
                    (string) $route["method"] === (string) $_SERVER["REQUEST_METHOD"]   // проверка совпадения метода с клиентом
                ){
                    self::listenRequests($route);
                }
            }
        }

        Page::render_error_page(404, "Maybe you're still too young for such tasks?");
    }

    private static function listenRequests(array $data)
    {
        $class = $data["callback"][0];
        $method = $data["callback"][1];

        call_user_func_array([new $class, $method], []);
        die();
    }
}
