<?php

namespace Aplication\routes;

use Aplication\controllers\movies\AddReviewController;
use Aplication\controllers\home\HomeController;
use Aplication\controllers\movies\AddMovieController;
use Aplication\controllers\users\AuthController;
use Aplication\controllers\users\RegisterController;
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
            "/add-movie" => [
                "reqType" => "GET",
                "method" => "index",
                "controller" => AddMovieController::class,
                "view" => FilesPath::view() . "movies/add-movie.php"
            ],
            "/add-review" => [
                "reqType" => "GET",
                "method" => "index",
                "controller" => AddReviewController::class,
                "view" => FilesPath::view() . "movies/add-review.php"
            ],
            "/login" => [
                "reqType" => "GET",
                "method" => "index",
                "controller" => AuthController::class,
                "view" => FilesPath::view() . "users/login.php"
            ],
            "/register" => [
                "reqType" => "GET",
                "method" => "index",
                "controller" => RegisterController::class,
                "view" => FilesPath::view() . "users/register.php"
            ],
            "/add-user" => [
                "reqType" => "POST",
                "method" => "create",
                "controller" => RegisterController::class,
                "view" => FilesPath::view() . "users/register.php"
            ]
        ];
    }
}
