<?php

use Aplication\helpers\path\FilesPath;
use Aplication\routes\Routes;

FilesPath::templateHeader(); ?>

<div class="title">Autenticando...</div>

<form id="form-cadastrar" action="<?= Routes::routes()['logar']['url'] ?>" method="<?= Routes::routes()['logar']['reqType'] ?>" class="form">
    <label>Email:</label>
    <input type="email" name="email" placeholder="email">
    <label>Senha:</label>
    <input type="password" name="password" placeholder="password">
    <button>Logar</button>
</form>
<?php FilesPath::templateFooter(); ?>