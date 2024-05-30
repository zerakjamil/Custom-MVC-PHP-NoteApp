<?php
use Core\App;
use Core\Database;
use Core\Validator;

// Instantiate Validator
$errors = [];

// Validate title and body
if (!Validator::string($_POST['title'], 1, 255)) {
    $errors['title'] = 'A title can be between 1 to 255';
}

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body between 1 to 1,000 is required';
}

// If there are validation errors, redirect back with errors
if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header('Location: /notes/create'); // Redirect back to create note page
    exit();
}
// If validation passes, insert into database
$db = App::resolve(Database::class);
$db->querry("INSERT INTO note (`body`, `user_id`, `title`) VALUES (:body, :user, :title)", [
    'body' => $_POST['body'],
    'user' => $_SESSION['user']['id'],
    'title' => $_POST['title']
]);

header('Location: /notes');
exit();

