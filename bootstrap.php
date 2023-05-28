<?php

use Core\App;
use Core\Container;
use Core\Database;

$container = new Container();

$container->bind('Core\Database', function () {
    $config = require base_path('config.php');
    $username = $config['database']['username'];
    $password = $config['database']['password'];

    unset($config['database']['username']);
    unset($config['database']['password']);

    return new Database($config['database'], $username, $password);
});

App::setContainer($container);
