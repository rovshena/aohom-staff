<?php

namespace Core;

class Authenticator
{
    public function attempt($username, $password): bool
    {
        $user = App::resolve(Database::class)
            ->query('select * from users where username = :username', [
                'username' => $username
            ])->find();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $this->login([
                    'username' => $user['username'],
                    'name' => $user['name']
                ]);

                return true;
            }
        }

        return false;
    }

    public function login($user)
    {
        $_SESSION['user'] = [
            'username' => $user['username'],
            'name' => $user['name']
        ];

        session_regenerate_id(true);
    }

    public function logout()
    {
        Session::destroy();
    }
}