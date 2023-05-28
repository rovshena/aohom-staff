<?php

use Core\App;
use Core\Database;
use Core\Session;

$db = App::resolve(Database::class);

$user = $db->query('select * from users where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

if ($user['username'] === auth()['username']) {
    Session::flash('error', 'Häzirki aktiw ulanyjyny pozmak bolmaýar!');
} else {
    $db->query('delete from users where id = :id', [
        'id' => $_POST['id']
    ]);
}

redirect('/admin/users');