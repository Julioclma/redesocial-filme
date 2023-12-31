<?php

namespace Aplication\models\movies;

interface RepositoryMoviesInterface
{
    public function create(CreateMovie $movie): bool;
    public function all(): array;
    public function getById(string $userId) : array;
}
