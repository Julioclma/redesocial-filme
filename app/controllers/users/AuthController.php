<?php

namespace Aplication\controllers\users;

use Aplication\controllers\DefaultController;
use Aplication\database\Connection;
use Aplication\models\Email;
use Aplication\repository\User\RepositoryUser;
use DomainException;

class AuthController extends DefaultController
{

    public function authenticate(): bool
    {
        $authenticate = (new RepositoryUser(Connection::conn()))->authenticate(new Email($_POST['email']), $_POST['password']);

        if ($authenticate) {
            $this->auth($_POST['email'], $_POST['password']);
        }

        throw new DomainException("Usuário não autenticado!");
    }

    private function auth(Email $email, string $password): array
    {
       return (new RepositoryUser(Connection::conn()))->authId($email, $password);
    }
}
