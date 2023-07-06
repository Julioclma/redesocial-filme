<?php

use Aplication\helpers\path\FilesPath;
use Aplication\routes\Routes;

FilesPath::templateHeader(); ?>

<div>Adicionando filme...</div>

<form id="form-cadastrar" class="form" action="<?= Routes::routes()['create-movie']['url'] ?>" method="<?= Routes::routes()['create-movie']['reqType'] ?>">
    <label>Title:</label>
    <input type="text" name="title" placeholder="titulo...">
    <label>description:</label>
    <input type="text" name="description" placeholder="description...">
    <label>image:</label>
    <input type="text" name="image" placeholder="image...">
    <button>Cadastrar</button>
</form>

<?php FilesPath::templateFooter(); ?>