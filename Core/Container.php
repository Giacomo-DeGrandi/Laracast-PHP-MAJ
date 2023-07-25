<?php


// My first service container lmfao.
// Service Container:
// The Service Container is like a box that holds different items (classes). 
// When you need an item, you ask the box for it, and it gives you the item 
// with everything that item needs inside it.
// it's mainly used for DEPENDENCY INJECTIONS
// Dependency Injection (DI):
// Dependency Injection is like ordering pizza. When you want pizza (your class), 
// you don't make it yourself; instead, you call a pizza delivery service (container) 
// that brings you pizza (dependencies) from a pizza place (other classes). "chatGPT" <3

namespace Core;

use Exception;


class Container {

    protected $bindings = [];

    // Binding:
    // When you want to bind a class to the Service Container, you use the bind method. 
    // It allows you to specify a concrete implementation for an abstract interface or a unique alias.
    public function bind($key, $resolver){
        
        return $this->bindings[$key] =  $resolver;
    }

    // Resolving:
    // To resolve a class instance from the Service Container, 
    // we use the resolve method.
    public function resolve($key)
    {
        if (!array_key_exists($key, $this->bindings)) {
            throw new Exception("No matching binding found for {$key}");
        }

        $resolver = $this->bindings[$key];

        return call_user_func($resolver);
    }

}