<?php

require 'functions.php';
//require 'router.php';

//day 7 connect to mysql using pdo object

$dsn = 'mysql:host=localhost;port=3306;dbname=project2notecrud;user=root;password=Mhead1864,;charset=utf8mb4';
$pdo = new PDO($dsn);

$statement = $pdo->prepare('SELECT * FROM posts');
$statement->execute();

$notes = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($notes as $note){
    echo "<li>" . $note['title'] . "</li>";
}


