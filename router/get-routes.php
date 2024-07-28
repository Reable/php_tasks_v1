<?php

use App\Services\Router;
use App\Controllers\PagesController;

// Step #1
Router::get("/", [PagesController::class, "login"]);
Router::get("/registration", [PagesController::class, "login_bad_request"]);

// Step #2
Router::get(
    "/01110010 01100101 01100111 01101001 01110011 01110100 01110010 01100001 01110100 01101001 01101111 01101110",
    [PagesController::class, "registration"]
);

Router::get(
    "/neqrgkgvh_psj_khasr_ewib",
    [PagesController::class, "dashboard"]
);
