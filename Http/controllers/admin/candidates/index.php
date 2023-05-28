<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$candidates = $db->query('select * from college')->get();

view('admin/candidates/index.view.php', [
    'title' => 'Dalaşgärler',
    'candidates' => $candidates
]);