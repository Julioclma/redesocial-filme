<?php

use Aplication\helpers\path\FilesPath;
use Aplication\routes\Routes;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= FilesPath::css() ?>" />
    <title>title</title>
</head>

<body>
    <nav>
        <div>
            <ul>
                <li><a href="<?= Routes::routes()['home']['url'] ?>">Home</a></li>
                <li><a href="<?= Routes::routes()['login']['url'] ?>">Entrar</a></li>
                <li><a href="<?= Routes::routes()['register']['url'] ?>">Cadastrar</a></li>
                <li><a href="<?= Routes::routes()['logout']['url'] ?>">Sair</a></li>
            </ul>
        </div>
        <div>
            <form action="#">
                <input type="text" name="search">
                <button type="submit">Pesquisar</button>
            </form>
        </div>

    </nav>