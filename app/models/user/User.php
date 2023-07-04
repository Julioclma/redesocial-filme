<?php

namespace Aplication\models\User;

class User
{
    private string $name;
    private string $lastName;

    public function __construct(string $name, string $lastName)
    {
        $this->name = $name;
        $this->lastName = $lastName;
    }
    public function name(): string
    {
        return $this->name;
    }
    public function lastName(): string
    {
        return $this->lastName;
    }
}
