<?php

namespace Aplication\controllers;

use Aplication\exceptions\ViewNotFound;
use Aplication\helpers\server\RequestServer;
use Aplication\routes\Routes;

class DefaultController
{
    protected array $params = [];

    public function index(): void
    {
        $params = $this->params;
        include($this->findViewPath());
    }
    protected function findViewPath(): string
    {
        foreach (Routes::routes() as $route) {
            if ($route['url'] === RequestServer::reqPath()) {
                if (array_key_exists('view', $route) && strlen($route['view']) > 0) {
                    return $route['view'];
                }
            }
        }

        throw new ViewNotFound("Caminho para View não encontrado");
    }

    protected function addParams(string $key, array $value): void
    {
        $this->params += [$key => $value];
    }
}
