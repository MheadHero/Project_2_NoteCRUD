<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$heading = "Notes";
$notes = $db->query('SELECT * FROM project2notecrud.notes WHERE userid = 1')->get();

view('notes/index.view.php', [
    'heading' => $heading,
    'notes' => $notes
]);