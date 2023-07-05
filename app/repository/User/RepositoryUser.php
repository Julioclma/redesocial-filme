<?php

namespace Aplication\repository\User;

use Aplication\models\Email;
use Aplication\models\User\CreateUser;
use Aplication\models\User\RepositoryUserInterface;
use PDO;

class RepositoryUser implements RepositoryUserInterface
{
    public string $table = "users";

    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function create(CreateUser $user): bool
    {
        $sql = "INSERT INTO {$this->table}
         (name, lastname, email, password)
         VALUES ( :name, :lastname, :email, :password)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':name', $user->user()->name());
        $stmt->bindValue(':lastname', $user->user()->lastName());
        $stmt->bindValue(':email', $user->email()->email());
        $stmt->bindValue(':password', $user->password());
        return $stmt->execute();
    }
    public function authenticate(Email $email, string $password): bool
    {
        $sql = "SELECT id FROM {$this->table} WHERE email = :email AND password = :password";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':email', $email->email());
        $stmt->bindValue(':password', $password);
        $stmt->execute();
        return $stmt->rowCount() > 0 ? true : false;
    }
    public function authId(Email $email, string $password): array
    {
        $sql = "SELECT id FROM {$this->table} WHERE email = :email AND password = :password";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':email', $email->email());
        $stmt->bindValue(':password', $password);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
