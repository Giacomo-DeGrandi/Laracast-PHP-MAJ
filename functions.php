<?php


function dd($data)
{
    echo "<pre>";
    die(var_dump($data));
    echo "</pre>";
}

function isUrl($url)
{
    return $_SERVER['REQUEST_URI'] === $url;
}

function abort($code = 404)
{
    http_response_code($code);
    $heading = "{$code}";
    require "views/{$code}.php";
    die();
}


function routeController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}