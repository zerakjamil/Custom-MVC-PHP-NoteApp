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

if(! empty($errors)){
    view('login/create.view.php',[
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);
//check if user already exists.
$check = $db->querry('select * from users where email = :email', [
    'email' => $user['email'],
])->find();

if($check && password_verify($user['password'],$check['password'])){
   session($user['email']);
    header('location: /');
    exit();
}else{
    $errors = ['password'=>''];
     view('login/create.view.php',[
        'errors'=> ['password'=>'please enter a valid credentials']
    ]);
}



