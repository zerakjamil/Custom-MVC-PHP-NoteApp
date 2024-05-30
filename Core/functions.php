<?php

use Core\App;
use Core\Database;
use Core\Response;
function dd($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function urlIs($value){
return $_SERVER['REQUEST_URI'] === "$value";
}

function authorize($condition,$status = Response::FORBIDDEN)
{
    if(!$condition):
       return abort($status);
    endif;
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    require base_path('views/' . $path);
}

function htmlSpecialCharWithLenght($value,$lenght){
    $text = htmlspecialchars(mb_substr($value, 0, $lenght));
    return strlen($value) > $lenght ? $text.'...' : $text;
}
function abort($code = 404)
{
    http_response_code($code);
    require base_path("views/{$code}.php");
    die();
}

function session($email)
{
    $db = App::resolve(Database::class);
    $user = $db->querry('select * from users where email = :email', [
        'email' => $email,
    ])->find();

    $_SESSION['user'] = [
        'email' => $user['email'],
        'id' => $user['id'],
    ];
}