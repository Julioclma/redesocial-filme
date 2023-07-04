<?php

namespace Aplication\models;

use InvalidArgumentException;

class Email
{
    private string $email;

    public function __construct(string $email)
    {
        $this->setEmail($email);
    }

    private function setEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException("Email inválido!");
        }

        $this->email = $email;
    }
    public function email(): string
    {
        return $this->email;
    }
}
