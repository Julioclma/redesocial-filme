<?php

namespace Aplication\controllers\home;

use Aplication\controllers\DefaultController;
use Aplication\database\Connection;
use Aplication\repository\movies\RepositoryMovies;

class HomeController extends DefaultController
{

    public function index(): void
    {
        $movies = new RepositoryMovies(Connection::conn());

        $this->addParams('movies', $movies->all());

        $params = $this->params;
        include($this->findViewPath());
    }
}
