<?php

namespace Aplication\controllers\users;

use Aplication\controllers\DefaultController;
use Aplication\database\Connection;
use Aplication\models\Email;
use Aplication\repository\User\RepositoryUser;
use DomainException;

class AuthController extends DefaultController
{
    public function index(): void
    {
        $params = $this->params;
        include($this->findViewPath());
    }

    public function authenticate(): void
    {
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        $authenticate = (new RepositoryUser(Connection::conn()))->authenticate(new Email($email), $password);

        if ($authenticate) {
            $_SESSION['autenticado'] = true;
            $_SESSION['authContent'] = $this->auth(new Email($email), $password)[0];
            return;
        }

        session_destroy();

        throw new DomainException("Falha ao autenticar usuário!");
    }

    private function auth(Email $email, string $password): array
    {
        return (new RepositoryUser(Connection::conn()))->authContent($email, $password);
    }

    public function logout(): void
    {
        session_destroy();
        $this->redirectToHome();
    }
}
