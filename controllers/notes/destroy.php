<?php
use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$note = $db->querry('select * from note where id = :id',[
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $_SESSION['user']['id']);

$db->querry('delete from note where id = :id',[
    'id' => $_GET['id'],
]);

header('location: /notes');
exit();