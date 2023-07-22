<?php

use Core\Database;

$config = require basePath('config.php'); 

//$db = new Database($config['database'], 'root', 'Mhead1864,');
$db = new Database($config['database']);

$currentuser = 1;
$heading = "Personal Note";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $note = $db->query('SELECT * FROM project2notecrud.notes WHERE id = :id', [
        'id' => $_GET['id']
    ])->findOrDie();

    authorize($note['userid'] == $currentuser);

    $db->query('DELETE FROM project2notecrud.notes WHERE id = :id', [
        'id' => $_GET['id']
    ]);

    header('Location: /notes'); //syntax explaination: https://stackoverflow.com/questions/768431/how-to-make-a-redirect-in-php
    exit();
} else {
    $id = $_GET['id'];
    $note = $db->query('SELECT * FROM project2notecrud.notes WHERE id = ?', [$id])->findOrDie();


    authorize($note['userid'] == $currentuser);

    view('notes/display.view.php', [
        'heading' => $heading,
        'note' => $note
    ]);
}