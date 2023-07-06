<?php

namespace Aplication\routes;

use Aplication\controllers\movies\AddReviewController;
use Aplication\controllers\home\HomeController;
use Aplication\controllers\movies\AddMovieController;
use Aplication\controllers\users\AuthController;
use Aplication\controllers\users\RegisterController;
use Aplication\helpers\path\FilesPath;
use Aplication\helpers\server\RequestServer;
use DomainException;

class Routes
{
    public static function routes(): array
    {
        return [
            "home" => [
                "url" => "/home",
                "reqType" => "GET",
                "method" => "index",
                "controller" => HomeController::class,
                "view" => FilesPath::view() . "index.php"
            ],
            "add-movie" => [
                "url" => "/add-movie",
                "reqType" => "GET",
                "method" => "index",
                "controller" => AddMovieController::class,
                "view" => FilesPath::view() . "movies/add-movie.php"
            ],
            "create-movie" => [
                "url" => "/add-movie",
                "reqType" => "POST",
                "method" => "create",
                "controller" => AddMovieController::class,
                "view" => FilesPath::view() . "movies/add-movie.php"
            ],
            "add-review" => [
                "url" => "/add-review",
                "reqType" => "GET",
                "method" => "index",
                "controller" => AddReviewController::class,
                "view" => FilesPath::view() . "movies/add-review.php"
            ],
            "login" => [
                "url" => "/login",
                "reqType" => "GET",
                "method" => "index",
                "controller" => AuthController::class,
                "view" => FilesPath::view() . "users/login.php"
            ],
            "logar" => [
                "url" => "/login",
                "reqType" => "POST",
                "method" => "authenticate",
                "controller" => AuthController::class,
                "view" => FilesPath::view() . "users/login.php"
            ],"logout" => [
                "url" => "/logout",
                "reqType" => "GET",
                "method" => "logout",
                "controller" => AuthController::class,
                "view" => FilesPath::view() . "users/login.php"
            ],
            "register" => [
                "url" => "/register",
                "reqType" => "GET",
                "method" => "index",
                "controller" => RegisterController::class,
                "view" => FilesPath::view() . "users/register.php"
            ],
            "add-user" => [
                "url" => "/add-user",
                "reqType" => "POST",
                "method" => "create",
                "controller" => RegisterController::class,
                "view" => FilesPath::view() . "users/register.php"
            ]
        ];
    }

    public static function getCurrentRoute(): array
    {
        foreach (self::routes() as $key => $route) {
            if ($route['url'] === RequestServer::reqPath()) {
                return $route;
            }
        }

        throw new DomainException("Nenhuma rota encontrada!");
    }
}
