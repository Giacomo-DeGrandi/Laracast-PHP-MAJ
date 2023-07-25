<?php

namespace Core;

// The App Class:
// The App class in Laravel is essentially a facade for the underlying Service Container. 
// A facade is a way to access classes from the container in a static-like fashion. 
// It provides a simple and readable API for common operations without needing 
// to resolve objects manually from the container.



class App
{

    protected static $container;

    public static function setContainer($container)
    {

        static::$container = $container;
    }


    public static function container()
    {

        return static::$container;
    }


    public static function bind($key, $resolver)
    {
        

        static::container()->bind($key, $resolver);
    }

    public static function resolve($key)
    {

        return static::container()->resolve($key);
    }
}
