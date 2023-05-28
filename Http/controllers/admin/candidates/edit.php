<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$candidate = $db->query('select * from college where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

view('admin/candidates/edit.view.php', [
    'title' => 'Dalaşgär üýtgetmek',
    'candidate' => $candidate
]);
