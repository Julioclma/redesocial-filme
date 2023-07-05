<?php

namespace Aplication\models\user;

use Aplication\models\Email;

interface RepositoryUserInterface
{
    public function create(CreateUser $user) : bool;
    public function auth(Email $email, string $password) : bool;
}
