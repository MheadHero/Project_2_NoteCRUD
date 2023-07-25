<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentuser = 1;
$heading = "Personal Note";

$id = $_GET['id'];
$note = $db->query('SELECT * FROM project2notecrud.notes WHERE id = ?', [$id])->findOrDie();


authorize($note['userid'] == $currentuser);

view('notes/display.view.php', [
    'heading' => $heading,
    'note' => $note
]);