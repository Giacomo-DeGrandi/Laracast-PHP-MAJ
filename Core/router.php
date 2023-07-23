<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = require base_path('routes.php');

function routeController($uri, $routes)
{   // If in the URI ARRAY the corresponding ROUTE exist require it else abort 
    if (array_key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
    } else {
        abort();
    }
}


$route = routeController($uri, $routes);
