<?php

namespace Aplication\routes;

use Aplication\controllers\DefaultController;
use Aplication\helpers\server\RequestServer;
use DomainException;

class RoutesControll
{

    public function process(): void
    {
        $this->defineReq();
    }


    private function defineReq(): void
    {

        foreach (Routes::routes() as $route) {

            if ($route['url'] === RequestServer::reqPath() && $route['reqType'] === RequestServer::reqType()) {

                $controller = new $route['controller'];
                $method = $route['method'];

                $checkMethod = method_exists($controller, $method);

                if (!$checkMethod) {
                    throw new DomainException("Método não existe!");
                }

                $controller->$method();
                return;
            }
        }

        throw new DomainException("Nenhuma requisição encontrada!");
    }
}
