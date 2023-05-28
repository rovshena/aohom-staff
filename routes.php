<?php

$router->get('/', 'index.php');

$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->delete('/session', 'session/destroy.php')->only('auth');

$router->get('/admin', 'admin/index.php')->only('auth');
$router->get('/admin/change-password', 'admin/change-password/show.php')->only('auth');
$router->put('/admin/change-password', 'admin/change-password/update.php')->only('auth');

// users
$router->get('/admin/users', 'admin/users/index.php')->only('admin');
$router->get('/admin/users/create', 'admin/users/create.php')->only('admin');
$router->post('/admin/users', 'admin/users/store.php')->only('admin');
$router->get('/admin/user', 'admin/users/edit.php')->only('admin');
$router->put('/admin/user', 'admin/users/update.php')->only('admin');
$router->delete('/admin/user', 'admin/users/destroy.php')->only('admin');

//candidates
$router->get('/admin/candidates', 'admin/candidates/index.php')->only('admin');
$router->get('/admin/candidates/create', 'admin/candidates/create.php')->only('admin');
$router->post('/admin/candidates', 'admin/candidates/store.php')->only('admin');
$router->get('/admin/candidate', 'admin/candidates/edit.php')->only('admin');
$router->put('/admin/candidate', 'admin/candidates/update.php')->only('admin');
$router->delete('/admin/candidate', 'admin/candidates/destroy.php')->only('admin');
