<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [

    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/notes' => 'controllers/notes.php'

];


function routeController($uri, $routes)
{   // If in the URI ARRAY the corresponding ROUTE exist require it else abort 
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}


$route = routeController($uri, $routes);
