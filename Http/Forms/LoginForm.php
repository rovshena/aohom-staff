<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;

class LoginForm
{
    public array $attributes;
    protected array $errors = [];

    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
        if (!Validator::string($attributes['username'])) {
            $this->errors['username'] = 'Ulanyjy adyny hökman girizmeli.';
        }

        if (!Validator::string($attributes['password'])) {
            $this->errors['password'] = 'Paroly hökman girizmeli.';
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