<?php

use Core\Session;

// Start session if not already started in php.ini
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

const BASE_PATH = __DIR__ . '/../';

require_once BASE_PATH . 'Core/Functions.php'; 

spl_autoload_register(function ($class): void {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require_once BASE_PATH . "{$class}.php";
});


require_once base_path('views/bootstrap.php');

$router = new \Core\Router();
$routes = require base_path('routes.php');

// 1. Get the full Request URI
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// 2. Script Name helps us find the subfolder (e.g., /filipino-inventor)
$scriptName = dirname($_SERVER['SCRIPT_NAME']);

// 3. Remove the subfolder from the URI to get the relative route
if (strpos($uri, $scriptName) === 0) {
    $uri = substr($uri, strlen($scriptName));
}

// 4. Ensure URI starts with / and remove trailing slash if it's not just "/"
$uri = '/' . ltrim($uri, '/');
if (strlen($uri) > 1) {
    $uri = rtrim($uri, '/');
}

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->Route($uri, $method);

Session::unflash();