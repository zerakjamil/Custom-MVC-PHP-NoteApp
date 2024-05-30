<?php

use Core\App;
use Core\Database;
use Core\Validator;
$user = [
    'email' => $_POST['email'],
    'password' => $_POST['password'],
];

//Validate the variables
$errors = [];
if(! Validator::email($user['email'])):
    $errors ['email'] = 'Please enter a valid email address';
endif;

if(! Validator::string($user['password'],7,255)):
    $errors ['password'] = 'Please enter a password with at least 7 characters ';
endif;

if(! empty($errors)){
    view('registration/create.view.php',[
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);
//check if user already exists.
$check = $db->querry('select * from users where email = :email', [
    'email' => $user['email'],
])->find();


if($check){
    //if yes, redirect to login page.
    header('location: /login');
    exit();
}else{
    //else, register the user into database.
    //Insert the user into the database
    $db->querry('INSERT INTO users(email,password) VALUES (:email,:password)',[
        'email' => $user['email'],
        'password' => password_hash($user['password'],PASSWORD_BCRYPT),
    ]);
    //create a session for the registered user.
    session($user['email']);
    //redirect the registered user.
    header('location: /');
    exit();
}



