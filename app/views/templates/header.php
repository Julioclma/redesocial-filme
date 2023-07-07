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

        <?php if (!empty($_SESSION['autenticado'])) : ?>
            <div>
                <li><a href="#">Bem vindo, <?= $_SESSION['authContent']['name'] ?></a></li>

            </div>
        <?php endif; ?>

        <div>
            <form action="#">
                <input type="text" name="search">
                <button type="submit">Pesquisar</button>
            </form>
        </div>





        <div id="container-links">
            <?php if (!empty($_SESSION['autenticado'])) : ?>
                <ul>
                    <li><a href="<?= Routes::routes()['home']['url'] ?>">Home</a></li>
                    <li><a href="<?= Routes::routes()['my-movies']['url'] ?>">Meus Filmes</a></li>
                    <li><a href="<?= Routes::routes()['logout']['url'] ?>">Sair</a></li>
                </ul>
            <?php else : ?>
                <ul>
                    <li><a href="<?= Routes::routes()['home']['url'] ?>">Home</a></li>
                    <li><a href="<?= Routes::routes()['login']['url'] ?>">Entrar</a></li>
                    <li><a href="<?= Routes::routes()['register']['url'] ?>">Cadastrar</a></li>
                </ul>

            <?php endif; ?>
        </div>
    </nav>