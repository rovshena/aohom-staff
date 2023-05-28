<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;

class StoreUserForm
{
    public array $attributes;
    protected array $errors = [];

    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
        if (!Validator::string($attributes['username'], 1, 255)) {
            $this->errors['username'] = 'Ulanyjy adyny hökman girizmeli.';
        }

        if (!Validator::string($attributes['name'], 1, 255)) {
            $this->errors['name'] = 'Adyny hökman girizmeli.';
        }

        if (!Validator::string($attributes['password'], 1, 255)) {
            $this->errors['password'] = 'Paroly hökman girizmeli.';
        }

        if (!Validator::string($attributes['password_confirmation'],1, 255)) {
            $this->errors['password'] = 'Paroly gaýtadan hökman girizmeli.';
        }

        if (!Validator::same($attributes['password'], $attributes['password_confirmation'])) {
            $this->errors['password'] = 'Parol bilen deň bolmaly.';
        }
    }

    public static function validate($attributes)
    {
        $instance = new static($attributes);

        return $instance->failed() ? $instance->throw() : $instance;
    }

    public function throw()
    {
        ValidationException::throw($this->errors(), $this->attributes);
    }

    public function failed()
    {
        return count($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }

    public function error($field, $message)
    {
        $this->errors[$field] = $message;

        return $this;
    }
}