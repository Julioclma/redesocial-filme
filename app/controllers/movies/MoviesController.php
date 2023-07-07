<?php

namespace Aplication\controllers\movies;

use Aplication\controllers\DefaultController;
use Aplication\database\Connection;
use Aplication\repository\movies\RepositoryMovies;

class MoviesController extends DefaultController
{

    public function __construct()
    {
        if (!$this->isAuth()) {
            $this->redirectToHome();
            return;
        }
    }
    public function index(): void
    {
        $movies = $this->getById($_SESSION['authContent']['id']);
        $this->addParams('movies', $movies);
        $params = $this->params;
        include($this->findViewPath());
    }

    private function getById(string $userId): array
    {
        return (new RepositoryMovies(Connection::conn()))->getById($userId);
    }
}
