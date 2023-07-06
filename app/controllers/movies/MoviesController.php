<?php

namespace Aplication\controllers\movies;

use Aplication\controllers\DefaultController;

class MoviesController extends DefaultController
{
    public function index(): void
    {
        $params = $this->params;
        include($this->findViewPath());
    }
}
