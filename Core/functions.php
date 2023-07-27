<?php


Use Core\Response;

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



function abort($code = Response::NOT_FOUND)
{   // Error handling, defaulted to 404, title set to ref CODE, die
    http_response_code($code);
    $heading = "{$code}";
    require base_path("views/{$code}.php");
    die();
}


function authorize($condition, $status = Response::FORBIDDEN)
{

    if (!$condition) {
        abort($status);
    }
    // return true if valid
    return true;
}


function base_path($path)
{
    return BASE_PATH . $path;
}


function view($path, $attr)
{
    // we extract the $attribute array on variables with the key 
    // as name and the value as value
    extract($attr);

    require base_path('views/'.$path);
}


function login($user){

    $_SESSION['user'] = [
        'email' => $user['email']
    ];

    session_regenerate_id(true);
}

function logout($user){

    $_SESSION = [];

    session_destroy();


    $params = session_get_cookie_params();

    setcookie('PHPSESSID', '', time() - 900, $params['path'], $params['domain'], $params['secure'], $params['httponly']);


    header('location: /');

    die();


}