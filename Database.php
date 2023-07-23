<?php


class Database
{

    public $connection;

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
        $statement = $this->connection->prepare($query);

        $statement->execute($params);

        return $statement;
    }
}


