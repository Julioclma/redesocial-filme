<?php

namespace Aplication\models\user;

use Aplication\models\Email;
use InvalidArgumentException;

class CreateUser
{
    private Description $description;
    private User $user;
    private Email $email;
    private string $token;
    private string $password;
    public function __construct(Description $description, User $user, Email $email, string $token, string $password, string $passwordConfirm)
    {
        $this->description = $description;
        $this->user = $user;
        $this->email = $email;
        $this->token = $token;
        $this->definePassword($password, $passwordConfirm);
    }

    private function definePassword(string $password, string $passwordConfirm): void
    {
        if ($this->checkPassword($password, $passwordConfirm)) {
            $this->password = $password;
            return;
        }
        throw new InvalidArgumentException("As senhas devem ser iguais");
    }
    private function checkPassword(string $password, string $passwordConfirm): bool
    {
        return  $password === $passwordConfirm ?  true :  false;
    }
    public function description(): Description
    {
        return $this->description;
    }
    public function user(): User
    {
        return $this->user;
    }
    public function token(): string
    {
        return $this->token;
    }
    public function email(): Email
    {
        return $this->email;
    }

    public function password(): string
    {
        return $this->password;
    }
}
