<?php

use Core\Response;
use Core\Session;
use JetBrains\PhpStorm\NoReturn;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value): bool
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function isAdminPage(): bool
{
    return strpos($_SERVER['REQUEST_URI'], 'admin');
}

#[NoReturn]
function abort($code = 404): void
{
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}

function authorize($condition, $status = Response::FORBIDDEN): bool
{
    if (!$condition) {
        abort($status);
    }

    return true;
}

function base_path($path): string
{
    return BASE_PATH . $path;
}

function asset($path): string
{
    return sprintf("http://$_SERVER[HTTP_HOST]/%s", $path);
}

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('views/' . $path);
}

function redirect($path)
{
    header("location: {$path}");
    exit();
}

function old($key, $default = '')
{
    return Session::get('old')[$key] ?? $default;
}

function auth()
{
    return Session::get('user');
}

function isAdmin()
{
    return auth()['is_admin'] ?? false;
}