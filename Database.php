<?php


class Database
{

    public $connection;

    public function __construct()
    {

        $config = [
            'host' => 'localhost',
            'port' => '3306',
            'dbname' => 'posts',
            'user' => 'root',
            'charset' => 'utf8mb4'
        ];

        // Connect to the MySQL database.
        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};user={$config['user']};charset={$config['charset']}";
        
        
    /* PDO Methods 
        public __construct(
            string $dsn, ?string $username = null, ?string $password = null, ?array $options = null
        )
    */
        $this->connection = new PDO($dsn, 'root', '', [

            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            
        ]);



    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }
}



