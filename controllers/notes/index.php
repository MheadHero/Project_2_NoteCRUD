<?php
$config = require basePath('config.php');

//$db = new Database($config['database'], 'root', 'Mhead1864,');
$db = new Database($config['database']);

$heading = "Notes";
$notes = $db->query('SELECT * FROM project2notecrud.notes WHERE userid = 1')->get();

view('notes/index.view.php', [
    'heading' => $heading,
    'notes' => $notes
]);