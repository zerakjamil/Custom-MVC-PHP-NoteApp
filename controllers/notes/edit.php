<?php
use Core\App;
use Core\Database;

$errors = [];
$db = App::resolve(Database::class);

$note = $db->querry('select * from note where id = :id',[
    'id' => $_GET['id']
])->findOrFail();

view('notes/update.view.php', [
    'note' => $note,
    'errors' => $errors,
]);