<?php 

namespace App\Services;

class Page 
{
    public static function render(string $name, string $message = "")
    {
        require_once "views/pages/". $name . ".php";
        die();
    }

    public static function render_error_page(string $code_error, string $message = ""){
        self::render("errors/" . $code_error, $message);
    }

}