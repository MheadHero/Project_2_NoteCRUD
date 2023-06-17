<?php 
$config = require 'config.php';

//$db = new Database($config['database'], 'root', 'Mhead1864,');
$db = new Database($config['database']);

$heading = "Create Note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    if (empty($_POST['body'])) {
        $errors['body'] = 'Body is required';
    }

    if (strlen($_POST['body']) > 500) {
        $errors['body'] = 'Body must be less than 500 characters';
    }

    $db->query('INSERT INTO `project2notecrud`.`notes` (`body`, `userid`) VALUES (:body, :userid)', [
        'body' => $_POST['body'],
        'userid' => 1
    ]);
}


require 'views/note-create.view.php';