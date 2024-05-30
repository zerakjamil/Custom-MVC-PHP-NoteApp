<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$note = $db->querry('select * from note where id = :id',[
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $_SESSION['user']['id']);

view('notes/show.view.php', [
    'heading' => 'My Note',
    'note' => $note,
    'locate' => base_path("controllers/notes/destroy.php")
]);