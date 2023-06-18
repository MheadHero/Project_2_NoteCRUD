<?php 
require 'Validator.php';
$config = require 'config.php';

//$db = new Database($config['database'], 'root', 'Mhead1864,');
$db = new Database($config['database']);

$heading = "Create Note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    if (! Validator::filterString($_POST['body'], 1, 255)) {
        $errors['body'] = 'A body of no more than 255 words is required';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO `project2notecrud`.`notes` (`body`, `userid`) VALUES (:body, :userid)', [
            'body' => $_POST['body'],
            'userid' => 1
        ]);
    }

}

require 'views/note-create.view.php';