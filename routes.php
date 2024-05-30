<?php
//general
$router->get('/', 'controllers/index.php');

//notes
$router->get('/notes', 'controllers/notes/index.php')->only('auth');
$router->get("/note", 'controllers/notes/show.php')->only('auth');
$router->get("/note-new", 'controllers/test.php')->only('auth');

//requests to create a note
$router->get('/notes/create', 'controllers/notes/create.php')->only('auth');
$router->post('/notes/create', 'controllers/notes/store.php');

//requests to edit a note
$router->get('/notes/edit', 'controllers/notes/edit.php')->only('auth');
$router->put('/notes/edit', 'controllers/notes/update.php')->only('auth');

//notes delete requests
$router->delete('/note', 'controllers/notes/destroy.php')->only('auth');

//registration requests
$router->get('/register', 'controllers/registration/create.php')->only('guest');
$router->post('/register', 'controllers/registration/store.php')->only('guest');

//login requests
$router->get('/login','controllers/login/show.php');
$router->post('/login','controllers/login/auth.php');

//destroy the sessions and log out the user
$router->post('/logout', 'controllers/login/logout.php')->only('auth');

//test the new app design
$router->get('/new-note', 'controllers/notes/index.php');