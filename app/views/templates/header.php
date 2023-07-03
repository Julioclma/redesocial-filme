<?php

use Aplication\helpers\path\FilesPath;

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
                <li><a href="">Entrar</a></li>
                <li><a href="">Cadastrar</a></li>
            </ul>
        </div>
        <div>
            <form action="#">
                <input type="text" name="search">
                <button type="submit">Pesquisar</button>
            </form>
        </div>

    </nav>