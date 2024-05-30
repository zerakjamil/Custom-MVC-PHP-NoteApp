<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$query = "select * from note where user_id = :user";
$notes = $db->querry($query,[
    'user' => $_SESSION['user']['id'],
])->all();

view('notes/index.view.php', [
    'heading' => 'Notes',
    'notes' => $notes,
]);