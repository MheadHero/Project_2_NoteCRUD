<?php

require 'functions.php';
//require 'router.php';
require 'Database.php'; //we use capital for classes

//day 7 connect to mysql using pdo object
//day 8 make it into a class
$config = require 'config.php';

//$db = new Database($config['database'], 'root', 'Mhead1864,');
$db = new Database($config['database']);
$notes = $db->query('SELECT * FROM posts')->fetchAll();

foreach ($notes as $note){
    echo "<li>" . $note['title'] . "</li>";
}


