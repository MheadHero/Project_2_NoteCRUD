<?php

require 'functions.php';
//require 'router.php';
require 'Database.php'; //we use capital for classes

//day 7 connect to mysql using pdo object
//day 8 make it into a class
$config = require 'config.php';

//$db = new Database($config['database'], 'root', 'Mhead1864,');
$db = new Database($config['database']);

//day 9: when accepting user input through query string or form, never inline it as part of SQL query
$id = $_GET['id'];

$query = 'SELECT * FROM posts WHERE id = ?';
//$notes = $db->query('SELECT * FROM posts WHERE id =?', [$id])->fetch();
$notes = $db->query($query, [$id])->fetch(); //binding the id to the query or we say parameterized query/ prepared statement.
dd($notes);
foreach ($notes as $note){
    echo "<li>" . $note['title'] . "</li>";
}


