<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentuser = 1;

$note = $db->query('SELECT * FROM project2notecrud.notes WHERE id = :id', [
    'id' => $_GET['id']
])->findOrDie();

authorize($note['userid'] == $currentuser);

$db->query('DELETE FROM project2notecrud.notes WHERE id = :id', [
    'id' => $_GET['id']
]);

header('Location: /notes'); //syntax explaination: https://stackoverflow.com/questions/768431/how-to-make-a-redirect-in-php
exit();