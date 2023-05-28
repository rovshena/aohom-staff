<?php

$router->get('/', 'index.php');

$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->delete('/session', 'session/destroy.php')->only('auth');

$router->get('/admin', 'admin/index.php')->only('auth');
$router->get('/admin/change-password', 'admin/change-password/show.php')->only('auth');
$router->put('/admin/change-password', 'admin/change-password/update.php')->only('auth');

$router->get('/admin/users', 'admin/users/index.php')->only('admin');
$router->delete('/admin/user', 'admin/users/destroy.php')->only('admin');
