<?php


use Core\Validator;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$heading = "Create Note";
$errors = [];


if (! Validator::filterString($_POST['body'], 1, 255)) {
$errors['body'] = 'A body of no more than 255 words is required';
}

if (! empty($errors)) {
    return view('notes/create.view.php', [
        'heading' => $heading,
        'errors' => $errors
    ]);
}

$db->query('INSERT INTO `project2notecrud`.`notes` (`body`, `userid`) VALUES (:body, :userid)', [
    'body' => $_POST['body'],
    'userid' => 1
]);

header('Location: /notes');
exit();