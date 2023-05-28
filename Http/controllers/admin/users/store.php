<?php

use Core\App;
use Core\Database;
use Core\Session;
use Http\Forms\StoreUserForm;

$form = StoreUserForm::validate($attributes = [
    'username' => $_POST['username'],
    'name' => $_POST['name'],
    'password' => $_POST['password'],
    'password_confirmation' => $_POST['password_confirmation']
]);

$db = App::resolve(Database::class);

$user = $db->query('select * from users where username = :username', [
    'username' => $attributes['username']
])->find();

if ($user) {
    $form->error(
        'username', 'Ulanyjy öň hasaba alynan.'
    )->throw();
}

$db->query('INSERT INTO users(username, name, password) VALUES(:username, :name, :password)', [
    'username' => $attributes['username'],
    'name' => $attributes['name'],
    'password' => password_hash($attributes['password'], PASSWORD_BCRYPT)
]);

Session::flash('success', 'Ulanyjy üstünlikli goşuldy.');

redirect('/admin/users');
