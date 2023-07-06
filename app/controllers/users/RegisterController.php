<?php

namespace Aplication\controllers\users;

use Aplication\controllers\DefaultController;
use Aplication\database\Connection;
use Aplication\models\Email;
use Aplication\models\user\CreateUser;
use Aplication\models\user\Description;
use Aplication\models\User\User;
use Aplication\repository\User\RepositoryUser;

class RegisterController extends DefaultController
{
    public function index(): void
    {
        $params = $this->params;
        include($this->findViewPath());
    }
    public function create(): bool
    {
        $description = new Description("", "");

        $user = new User(filter_input(INPUT_POST, 'name'), filter_input(INPUT_POST, 'lastname'));

        $email = new Email(filter_input(INPUT_POST, 'email'));

        $token = "";

        $password = filter_input(INPUT_POST, 'password');

        $passwordConfirm = filter_input(INPUT_POST, 'confirm_password');

        return (new RepositoryUser(Connection::conn()))->create(new CreateUser($description, $user, $email, $token, $password, $passwordConfirm));
    }
}
