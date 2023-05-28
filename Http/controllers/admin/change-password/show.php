<?php

use Core\Session;

view('admin/change-password.view.php', [
    'title' => 'Parol çalyşmak',
    'errors' => Session::get('errors')
]);