<?php

namespace Aplication\controllers;

use Aplication\controllers\home\HomeController;
use Aplication\exceptions\ViewNotFound;
use Aplication\helpers\server\RequestServer;
use Aplication\routes\Routes;

class DefaultController
{
    protected array $params = [];


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

    protected function isAuth(): bool
    {
        if (!empty($_SESSION) &&  array_key_exists('autenticado', $_SESSION)) {
            if ($_SESSION['autenticado']) {
                return true;
            }
        }
        return false;
    }

    protected function redirectToHome(): void
    {
        header('Location: ' . Routes::routes()['home']['url']);
        session_destroy();
    }
}
