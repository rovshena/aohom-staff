<?php

use Core\App;
use Core\Database;
use Core\Session;

$attributes = [
    'Hunar' => $_POST['Hunar'],
    'Oglan_gyz' => $_POST['Oglan_gyz'],
    'gelin' => $_POST['gelin'],
    'Welayat' => $_POST['Welayat'],
    'Etrap' => $_POST['Etrap'],
    'tabsyran_senesi' => $_POST['tabsyran_senesi'],
    'FAA' => $_POST['FAA'],
    'Doglan_senesi' => $_POST['Doglan_senesi'],
];

$db = App::resolve(Database::class);

$user = $db->query(
    'insert into college (user_id, Hunar, Oglan_gyz, Welayat, etrap, tabsyran_senesi, Tb, FAA, doglan_senesi) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)',
    array_merge([auth()['id']], array_values($attributes))
);

Session::flash('success', 'Dalaşgär üstünlikli goşuldy.');

redirect('/admin/candidates');
