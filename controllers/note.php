<?php
$config = require 'config.php';

//$db = new Database($config['database'], 'root', 'Mhead1864,');
$db = new Database($config['database']);

$heading = "Personal Note";
$currentuser = 1;

$id = $_GET['id'];
$note = $db->query('SELECT * FROM project2notecrud.notes WHERE id = ?', [$id])->fetch();

if (!$note) {
    abort();
}

if ($note['userid'] != $currentuser) {
    abort(Response::UNAUTHORIZED);
}



require 'views/note.view.php'; //cannot use /views/index.view.php because it is not a root directory