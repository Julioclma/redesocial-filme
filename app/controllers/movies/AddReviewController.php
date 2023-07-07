<?php

namespace Aplication\controllers\movies;

use Aplication\controllers\DefaultController;

class AddReviewController extends DefaultController
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

        $params = $this->params;
        include($this->findViewPath());
    }
}
