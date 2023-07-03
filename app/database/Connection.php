<?php

namespace Aplication\database;

use PDO;
use PDOException;

class Connection
{
    public static function conn(): PDO
    {
        try {

            $config = ConfigDatabase::config();

            $conn = new PDO("{$config->type}:host={$config->host};dbname={$config->name}", $config->user, $config->password);

            if ($conn) {
                return $conn;
            }
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }
}
