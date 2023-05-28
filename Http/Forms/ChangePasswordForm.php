<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;

class ChangePasswordForm
{
    public array $attributes;
    protected array $errors = [];

    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
        if (!Validator::string($attributes['current_password'])) {
            $this->errors['current_password'] = 'Häzirki parolyňyzy hökman girizmeli.';
        }

        if (!Validator::string($attributes['password'])) {
            $this->errors['password'] = 'Täze paroly hökman girizmeli.';
        }

        if (!Validator::string($attributes['password_confirmation'])) {
            $this->errors['password'] = 'Täze paroly gaýtadan hökman girizmeli.';
        }

        if (!Validator::same($attributes['password'], $attributes['password_confirmation'])) {
            $this->errors['password'] = 'Täze parol bilen deň bolmaly.';
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