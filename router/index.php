<?php

use App\Controllers\PagesController;
use App\Controllers\UserController;
use App\Services\Router;

// Pages routers
require_once "router/get-routes.php";

// Get routes
require_once "router/post-routes.php";


// Listening to all routes
Router::listen();