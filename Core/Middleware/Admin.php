<?php

namespace Core\Middleware;

use Core\Session;

class Admin
{
    public function handle()
    {
        if (!isAdmin()) {
            Session::flash('error', 'Siziň rugsadyňyz ýok.');

            redirect('/admin');
        }
    }
}