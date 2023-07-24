<?php

// declare Core namespace
namespace Core;

use PDO;


class Database
{

    public $connection;

    public $statement;


    public function __construct($config)
    {


        //dd(http_build_query($config, '', ';'));


        // Connect to the MySQL database.
        $dsn = "mysql:".http_build_query($config, '',';');
        
        
    /* PDO Methods 
        public __construct(
            string $dsn, ?string $username = null, ?string $password = null, ?array $options = null
        )
    */
        $this->connection = new PDO($dsn, 'root', '', [

            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            
        ]);



    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }


    // Get possession of PDOStatement fetch() for further use
    public function find(){

        return $this->statement->fetch();

    }

    // Get possession of PDOStatement fetchAll() for further use
    public function get()
    {

        return $this->statement->fetchAll();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (!$result) {
            abort();
        }

        return $result;
    }

    public function getOrFail()
    {
        $results = $this->get();

        if (!$results) {
            abort();
        }

        return $results;
    }




}


