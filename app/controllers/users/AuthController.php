<?php

namespace Aplication\controllers\users;

use Aplication\controllers\DefaultController;
use Aplication\database\Connection;
use Aplication\models\Email;
use Aplication\repository\User\RepositoryUser;
use DomainException;

class AuthController extends DefaultController
{

    public function authenticate(): void
    {
        $authenticate = (new RepositoryUser(Connection::conn()))->authenticate(new Email($_POST['email']), $_POST['password']);
        
        if ($authenticate) {
            $_SESSION['autenticado'] = true;
            $_SESSION['authContent'] = $this->auth(new Email($_POST['email']), $_POST['password'])[0];
            return;
        }

        session_destroy();

        throw new DomainException("Falha ao autenticar usuário!");
    }

    private function auth(Email $email, string $password): array
    {
        return (new RepositoryUser(Connection::conn()))->authContent($email, $password);
    }
}
