<?php


namespace Core;


class Container {

    protected $bindings = [];


    public function bind($key, $resolver){
        
        return $this->bindings[$key] =  $resolver;
    }

    public function resolve($key){

        if(!array_key_exists( $key, $this->bindings)){
            throw new \Exception('No matching bindings found for this item');
        }

            $resolver = $this->bindings[$key];

            return call_user_func($resolver);

    }

}