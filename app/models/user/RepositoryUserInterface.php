<?php

namespace Aplication\models\user;

interface RepositoryUserInterface
{
    public function create(CreateUser $user) : bool;
    public function auth();
}
