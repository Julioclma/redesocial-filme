<?php

namespace Aplication\database;

class ConfigDatabase
{
    public static function config(): object
    {
        return (object)[
            "type" => "mysql",
            "host" => "localhost",
            "name" => "rede_social_filmes",
            "user" => "root",
            "password" => "1234",
        ];
    }
}
