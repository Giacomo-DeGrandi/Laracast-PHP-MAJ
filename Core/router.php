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


    public function add($method, $uri, $controller){
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }


    public function get($uri, $controller)
    {
       $this->add('GET', $uri, $controller);
    }
    


    public function post($uri, $controller)
    {
        return $this->add('POST', $uri, $controller);
    }


    public function delete($uri, $controller)
    {
        return $this->add('DELETE', $uri, $controller);
    }


    public function patch($uri, $controller)
    {
        return $this->add('PATCH', $uri, $controller);
    }

    public function put($uri, $controller)
    {
        return $this->add('PUT', $uri, $controller);
    }

    public function abort($code = Response::NOT_FOUND)
    {   // Error handling, defaulted to 404, title set to ref CODE, die
        http_response_code($code);
        $heading = "{$code}";
        require base_path("views/{$code}.php");
        die();
    }

    public function only(){

    }

    public function route($uri, $method)
    {
        
        foreach($this->routes as $route){
            if($route['uri'] === $uri AND $route['method'] === strtoupper($method)){
                
                return require base_path($route['controller']);
            }
        
        }
        //dd('hello');
 
        $this->abort(404);

    }


}

