<?php

namespace Aplication\controllers\movies;

use Aplication\controllers\DefaultController;
use Aplication\database\Connection;
use Aplication\models\movies\CreateMovie;
use Aplication\repository\movies\RepositoryMovies;

class AddMovieController extends DefaultController
{
    public function index(): void
    {
        $this->isAuth() ?: $this->redirectToHome();
        $params = $this->params;
        include($this->findViewPath());
    }
    public function create(): bool
    {
        $title = filter_input(INPUT_POST, 'title');
        $description = filter_input(INPUT_POST, 'description');
        $image = filter_input(INPUT_POST, 'image');
        $movie = new CreateMovie($title, $description, $image, $_SESSION['authContent']['id']);
        return (new RepositoryMovies(Connection::conn()))->create($movie);
    }
}
