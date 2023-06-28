<?php 
$config = require basePath('config.php');

//$db = new Database($config['database'], 'root', 'Mhead1864,');
$db = new Database($config['database']);

$heading = "Create Note";
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

view('notes/create.view.php', [
    'heading' => $heading,
    'errors' => $errors
]);