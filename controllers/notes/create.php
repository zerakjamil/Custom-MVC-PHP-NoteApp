<?php
$errors = [];
view('notes/create.view.php', [
    'heading' => 'Create a Note',
    'errors' => $errors,
]);