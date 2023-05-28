<?php

use Core\App;
use Core\Database;
use Core\Session;
use Http\Forms\ChangePasswordForm;

$form = ChangePasswordForm::validate($attributes = [
    'current_password' => $_POST['current_password'],
    'password' => $_POST['password'],
    'password_confirmation' => $_POST['password_confirmation']
]);

$db = App::resolve(Database::class);

$user = $db->query('select * from users where username = :username', [
    'username' => auth()['username']
])->findOrFail();

if (!password_verify($attributes['current_password'], $user['password'])) {
    $form->error(
        'current_password', 'Häzirki parolyňyz nädogry.'
    )->throw();
}

$db->query('UPDATE users SET password = :password WHERE username = :username', [
    'username' => $user['username'],
    'password' => password_hash($attributes['password'], PASSWORD_BCRYPT)
]);

Session::flash('success', 'Parol üstünlikli üýtgedildi.');

redirect('/admin');
