<?php 

namespace App\Controllers;

use App\Controllers\Controller;
use App\Database\DB;
use App\Helpers\CaeserAllgoritm;
use App\Services\Page;
use App\Services\Response;
use PDO;

class UserController
{
    public function registration()
    {
        extract($_POST);

        // Для задание 4, вернуться на страницу авторизации и зайти под администратором чата) если додумается поменять user_ на admin_
        if($login === "admin_chat" && CaeserAllgoritm::encrypt($_POST["password"], 11) === "estdNzccpneAlddhzco"){
            Response::json([
                "url" => "/",
            ], 401);
            die();
        }

        $sql = "SELECT * FROM users WHERE login = $login";

        $data = DB::getInstance()->query_with_vulnerability($sql);

        if(isset($data[0])){
            if((string) $data[0]["password"] === (string) CaeserAllgoritm::encrypt($_POST["password"], 11)){
                Response::json([
                    "url" => "/neqrgkgvh_psj_khasr_ewib",
                ], 401);
                die();
            } else {
                Response::json([
                    "message" => "Unfortunately, you entered the wrong password, please try again",
                    $sql => $sql,
                    "data" => $data[0],
                    "status" => 401,
                ], 401);
            }
        }

        Response::json([
            "message" => "Sorry, there is no such user. <br> Maybe this form works differently?",
            $sql => $sql,
            "status" => 401,
        ], 401);
    }
}