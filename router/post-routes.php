<?php

use App\Services\Router;
use App\Controllers\PagesController;
use App\Controllers\UserController;

// Step #1
Router::post("/auth_login_form", [PagesController::class, "auth_login_form"]);

// Step #2
Router::post("/registration", [UserController::class, "registration"]);

