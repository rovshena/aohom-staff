<?php

use Core\App;
use Core\Database;
use Core\Session;
use Http\Forms\UpdateUserForm;

$form = UpdateUserForm::validate($attributes = [
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
    if ($user['username'] === 'admin') {
        $form->error(
            'username', 'Administratoryň maglumatyny üýtgetmek bolmaýar!'
        )->throw();
    }

    if ($user['id'] != $_POST['id']) {
        $form->error(
            'username', 'Ulanyjy ady öň goşulan.'
        )->throw();
    }
}

$values = [
    'username' => $attributes['username'],
    'name' => $attributes['name'],
];

if (!empty($attributes['password'])) {
    $values['password'] = password_hash($attributes['password'], PASSWORD_BCRYPT);
}

$query = '';
foreach ($values as $key => $value) {
    $query .= "{$key} = :$key,";
}
$query = rtrim($query, ',');

$values['id'] = $user['id'];

$db->query("update users set $query where id = :id", $values);

Session::flash('success', 'Ulanyjy üstünlikli üýtgedildi.');

redirect('/admin/users');
