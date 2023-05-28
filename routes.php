<?php

$router->get('/', 'index.php');

$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->delete('/session', 'session/destroy.php')->only('auth');

$router->get('/admin', 'admin/index.php')->only('auth');
