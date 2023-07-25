<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

$note = $db->query('SELECT * FROM project2notecrud.notes WHERE id = :id', [
    'id' => $_GET['id']
])->findOrDie();

authorize($note['userid'] == $currentUserId);

view("notes/edit.view.php", [
    'heading' => 'Edit Note',
    'errors' => [],
    'note' => $note
]);