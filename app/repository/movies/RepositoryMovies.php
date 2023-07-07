<?php

namespace Aplication\repository\movies;

use Aplication\models\movies\CreateMovie;
use Aplication\models\movies\RepositoryMoviesInterface;
use PDO;

class RepositoryMovies implements RepositoryMoviesInterface
{

    public string $table = "movies";

    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function all(): array
    {
        $sql = "SELECT * FROM {$this->table}";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function create(CreateMovie $movie): bool
    {
        $sql = "INSERT INTO {$this->table}
        (title, description, image, users_id)
        VALUES ( :title, :description, :image, :users_id)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':title', $movie->title());
        $stmt->bindValue(':description', $movie->description());
        $stmt->bindValue(':image', $movie->image());
        $stmt->bindValue(':users_id', $movie->userId());
        return $stmt->execute();
    }
    public function getById(string $userId): array
    {
        $sql = "SELECT * FROM {$this->table} WHERE users_id = :users_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':users_id', $userId);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
