<?php

session_start();

$controller = $_GET['controller'] ?? 'home';
$routes = require 'routes.php';
require_once $routes[$controller];
if ($controller === 'home') {
    require_once 'controller/HomeController.php';
}
