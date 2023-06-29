<?php

namespace Aplication\controllers;

use Aplication\exceptions\ViewNotFound;
use Aplication\helpers\server\RequestServer;
use Aplication\routes\Routes;

class DefaultController
{

    protected function index(): void
    {
        var_dump($this->findViewPath());
    }
    protected function findViewPath(): string
    {
        foreach (Routes::routes() as $key => $route) {
            if ($key === RequestServer::reqPath()) {
                return $route['view'];
            }
        }

        throw new ViewNotFound("Caminho para View não encontrada");
    }
}
