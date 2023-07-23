<?php

// classic dump n die
function dd($data)
{   // format the dump
    echo "<pre>";
    die(var_dump($data));
    echo "</pre>";
}

function isUrl($url)
{   // Parse the REQUEST_URI of the url
    return $_SERVER['REQUEST_URI'] === $url;
}



function abort($code = Response::NOT_FOUND )
{   // Error handling, defaulted to 404, title set to ref CODE, die
    http_response_code($code);
    $heading = "{$code}";
    require "views/{$code}.php";
    die();
}

