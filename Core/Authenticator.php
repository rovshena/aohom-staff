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
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'name' => $user['name'],
                    'is_admin' => $user['is_admin']
                ]);

                return true;
            }
        }

        return false;
    }

    public function login($user)
    {
        $_SESSION['user'] = [
            'id' => $user['id'],
            'username' => $user['username'],
            'name' => $user['name'],
            'is_admin' => $user['is_admin']
        ];

        session_regenerate_id(true);
    }

    public function logout()
    {
        Session::destroy();
    }
}