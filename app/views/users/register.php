<?php

use Aplication\helpers\path\FilesPath;

FilesPath::templateHeader(); ?>

<div class="title">Registrando...</div>

<form id="form-cadastrar" class="form">
    <input type="text" name="name" placeholder="name">
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <button>Cadastrar</button>
</form>

<?php FilesPath::templateFooter(); ?>