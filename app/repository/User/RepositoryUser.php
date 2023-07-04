<?php

namespace Aplication\repository\User;

use Aplication\database\Connection;
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
    public function auth()
    {
    }
}
