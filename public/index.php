<?php


const BASE_PATH = __DIR__.'/../';


require BASE_PATH.'Core/functions.php';


spl_autoload_register(function ($class) {
        // Core\Database
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

        require base_path("{$class}.php");
});


$router = new \Core\Router();




$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['__method'] ?? $_SERVER['REQUEST_METHOD'];


$routes = require base_path('routes.php');

$router->route($uri, $method);