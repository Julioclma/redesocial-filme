<?php

namespace Aplication\models\user;

use Aplication\models\Email;

interface RepositoryUserInterface
{
    public function create(CreateUser $user): bool;
    public function authenticate(Email $email, string $password): bool;
    public function authContent(Email $email, string $password): array;
}
