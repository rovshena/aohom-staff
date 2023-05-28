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
    'doglan_senesi' => $_POST['Doglan_senesi'],
];

$db = App::resolve(Database::class);

$user = $db->query(
    'update college set Hunar = ?, Oglan_gyz = ?, gelin = ?, Welayat = ?, etrap = ?, tabsyran_senesi = ?, FAA = ?, doglan_senesi = ? where id = ?',
    array_merge(array_values($attributes), [$_POST['id']])
);

Session::flash('success', 'Dalaşgär üstünlikli üýtgedildi.');

redirect('/admin/candidates');
