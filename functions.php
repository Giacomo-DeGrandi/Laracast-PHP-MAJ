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
