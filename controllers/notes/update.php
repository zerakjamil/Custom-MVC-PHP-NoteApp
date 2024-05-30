<?php
use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
$validator = new Validator();
$errors = [];

$note = $db->querry('select * from note where id = :id',[
    'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $_SESSION['user']['id']);

// Validate title and body
if (!$validator::string($_POST['title'], 1, 255)) {
    $errors['title'] = 'A title can be between 1 to 255';
}

if (!$validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body between 1 to 1,000 is required';
}

// If there are validation errors, redirect back with errors
if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header('Location: /notes/edit'); // Redirect back to create note page
    exit();
}

$db->querry('UPDATE note SET body = :body, title = :title WHERE id = :id',[
    'id' => $_POST['id'],
    'body' => $_POST['body'],
    'title' => $_POST['title']
]);

header("Location:/note?id={$_POST['id']}");
exit();
