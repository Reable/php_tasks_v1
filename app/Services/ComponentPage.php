<?php 

namespace App\Services;

class ComponentPage {
    public static function render($component){
        require_once "views/components/" . $component . ".php";
    }
}