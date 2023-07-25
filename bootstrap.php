<?php


use Core\Database;
use Core\Container;
use Core\App;

// Dependency Injection Container Setup:
// The bootstrap.php file set up the dependency injection container (like the Service Container in Laravel) 
// and register important services or dependencies that will be used throughout the application's lifecycle.

$container = new Container();

$container->bind('Core\Database', function (){

        $config = require base_path('config.php');

        return new Database($config['database']); 

});

App::setContainer($container);