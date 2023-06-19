<?php
$config = require 'config.php';

//$db = new Database($config['database'], 'root', 'Mhead1864,');
$db = new Database($config['database']);

$heading = "Notes";
$notes = $db->query('SELECT * FROM project2notecrud.notes WHERE userid = 1')->get();

require 'views/notes/index.view.php'; //cannot use /views/index.view.php because it is not a root directory