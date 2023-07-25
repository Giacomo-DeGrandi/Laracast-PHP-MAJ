<?php

namespace Core;
/*



function routeController($uri, $routes)
{   // If in the URI ARRAY the corresponding ROUTE exist require it else abort 
    if (array_key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
    } else {
        abort();
    }
}


$route = routeController($uri, $routes);
*/

class Router
{

    protected $routes = [];


    public function get($uri, $controller)
    {

        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'GET'
        ];
    }


    public function post($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'POST'
        ];
    }


    public function delete($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'DELETE'
        ];
    }


    public function patch($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'PATCH'
        ];
    }

    public function put($uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => 'PUT'
        ];
    }

    public function abort($code = Response::NOT_FOUND)
    {   // Error handling, defaulted to 404, title set to ref CODE, die
        http_response_code($code);
        $heading = "{$code}";
        require base_path("views/{$code}.php");
        die();
    }


    public function route($uri, $method)
    {
        dd([$uri,$method]);
        
        foreach($this->routes as $route){
            if($route['uri'] === $uri AND $route['method'] === strtoupper($method)){
            
                return require base_path($route['controller']);
            }
        }

        $this->abort(404);

    }


}

