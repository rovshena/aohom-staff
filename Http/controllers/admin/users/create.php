<?php

use Core\Session;

view('admin/users/create.view.php', [
    'title' => 'Ulanyjy goşmak',
    'errors' => Session::get('errors')
]);