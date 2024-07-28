<?php 

namespace App\Services;

class Response {
    public static function json($data, $status = 200) {
        header("Content-type:application/json");  
        header("charset: utf8");  
    
        http_response_code($status);
        echo json_encode($data);

        die();
    }
}