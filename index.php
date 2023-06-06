<?php

require 'functions.php';
//require 'router.php';
require 'Database.php'; //we use capital for classes

//day 7 connect to mysql using pdo object
//day 8 make it into a class

$db = new Database();
$notes = $db->query('SELECT * FROM posts')->fetchAll(PDO::FETCH_ASSOC);

foreach ($notes as $note){
    echo "<li>" . $note['title'] . "</li>";
}


