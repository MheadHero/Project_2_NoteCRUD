<?php

class Database{
    public $connection;
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;port=3306;dbname=project2notecrud;user=root;password=Mhead1864,;charset=utf8mb4';  

        $this->connection = new PDO($dsn);
    }
    
    public function query($query){

        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}