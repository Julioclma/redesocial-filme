<?php

namespace Aplication\routes;

use Aplication\controllers\filmes\AdicionarCriticaController;
use Aplication\controllers\filmes\AdicionarFilmeController;
use Aplication\controllers\filmes\FilmesController;
use Aplication\controllers\home\HomeController;
use Aplication\controllers\usuario\AutenticacaoController;
use Aplication\helpers\path\FilesPath;

class Routes
{
    public static function routes(): array
    {
        return [
            "/home" => [
                "reqType" => "GET",
                "method" => "index",
                "controller" => HomeController::class,
                "view" => FilesPath::view() . "index.php"
            ],
            "/adicionar-filme" => [
                "reqType" => "GET",
                "method" => "index",
                "controller" => AdicionarFilmeController::class,
                "view" => FilesPath::view() . "filmes/adicionar-filme.php"
            ],
            "/adicionar-critica" => [
                "reqType" => "GET",
                "method" => "index",
                "controller" => AdicionarCriticaController::class,
                "view" => FilesPath::view() . "filmes/adicionar-critica.php"
            ],
            "/autenticacao" => [
                "reqType" => "GET",
                "method" => "index",
                "controller" => AutenticacaoController::class,
                "view" => FilesPath::view() . "usuario/autenticacao.php"
            ]
        ];
    }
}
