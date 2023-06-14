<?php

class Database{
    public $connection;
    public $statement;

    //public function __construct($config, $username = 'root', $password = '')
    public function __construct($config)
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        //$dsn = 'mysql:host=localhost;port=3306;dbname=project2notecrud;charset=utf8mb4';

        //$this->connection = new PDO($dsn, $username, $password, [
        $this->connection = new PDO($dsn, $config['user'], $config['password'], [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    
    public function query($query, $arg = []){ //execute expect an array 

        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($arg);

        return $this;
    }

    public function get(){
        return $this->statement->fetchAll();
    }

    public function find(){
        return $this->statement->fetch();
    }

    public function findOrDie(){
        $result = $this->find();

        if (!$result) {
            abort();
        }

        return $result;
    }
}