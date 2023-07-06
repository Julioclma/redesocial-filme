<?php

namespace Aplication\controllers\movies;

use Aplication\controllers\DefaultController;

class AddReviewController extends DefaultController
{
    public function index(): void
    {
        $params = $this->params;
        include($this->findViewPath());
    }
}