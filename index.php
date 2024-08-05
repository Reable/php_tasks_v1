<?php 
session_start();
header('Access-Control-Allow-Origin: *');

use App\Database\DB;

require_once __DIR__. '/vendor/autoload.php';

$db = DB::getInstance();
$db->connect();

$db->runMigrations();

require_once __DIR__. '/router/index.php';