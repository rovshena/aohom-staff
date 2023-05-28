<?php

use Core\App;
use Core\Database;
use Core\Session;

$db = App::resolve(Database::class);

$db->query('delete from college where id = :id', [
    'id' => $_POST['id']
]);

Session::flash('success', 'Ulanyjy üstünlikli pozuldy!');

redirect('/admin/users');