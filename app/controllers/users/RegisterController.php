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
    public function create(): bool
    {
        $description = new Description("", "");

        $user = new User($_POST['name'], $_POST['lastname']);

        $email = new Email($_POST['email']);

        $token = "";

        $password = $_POST['password'];

        $passwordConfirm = $_POST['confirm_password'];

        return (new RepositoryUser(Connection::conn()))->create(new CreateUser($description, $user, $email, $token, $password, $passwordConfirm));
    }
}
