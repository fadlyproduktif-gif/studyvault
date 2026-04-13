<?php
session_start();
$page = $_GET['page'] ?? 'dashboard';
$routes = [
    "dashboard" => "pages/dashboard/index.php",
    "login" => "pages/login/index.php",
    "register" => "pages/register/index.php",
    "semester" => "pages/semester/index.php",
    "cnfm-semester" => "pages/semester/confirm.php",
    "smt-create" => "pages/semester/create.php",
    "matakuliah" => "pages/matakuliah/index.php",
    "mtkl-create" => "pages/matakuliah/create.php",
    "mtkl-all" => "pages/matakuliah/all.php",
    "mtkl-create-all" => "pages/matakuliah/createAll.php",
    "catatan" => "pages/catatan/index.php",
    "crt-catatan" => "pages/catatan/create.php",
];

require "config/database.php";
require "config/app.php";
require "config/debug.php";
require "layout/header.php";

if (isset($_SESSION['user_id'])) {
    include "layout/navbar.php";
}

if ($page !== 'login' && $page !== 'register') {
    require BASE_PATH . "actions/auth/auth.php";
} else {
    require BASE_PATH . "actions/auth/authL.php";
}

if (array_key_exists($page, $routes)) {
    require $routes[$page];
} else {
    echo "404 page not found";
}

require "layout/footer.php";
