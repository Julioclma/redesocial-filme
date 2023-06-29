<?php

namespace Aplication\routes;

use Aplication\controllers\DefaultController;
use Aplication\helpers\server\RequestServer;
use DomainException;

class RoutesControll
{

    public function process(): void
    {
        $params = $this->defineReq();

        if (!$this->isIndex($params['method'])) {
        }

        $method = $params['method'];
        ($params['controller'])->$method();
        return;
    }

    private function isIndex(string $method): bool
    {
        return $method === 'index' ? true : false;
    }


    private function defineReq(): array
    {
        foreach (Routes::routes() as $key => $route) {
            if ($key === RequestServer::reqPath() && $route['reqType'] === RequestServer::reqType()) {
                $controller = new $route['controller'];

                $checkMethod = method_exists($controller, $route['method']);

                if (!$checkMethod) {
                    throw new DomainException("Método não existe!");
                }
                return ["controller" => $controller, "method" => $route['method'], "reqType" => RequestServer::reqType()];
            }

            throw new DomainException("Nenhuma requisição encontrada!");
        }
    }
}
