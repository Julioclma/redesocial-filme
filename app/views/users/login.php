<?php

use Aplication\helpers\path\FilesPath;

FilesPath::templateHeader(); ?>

<div class="title">Autenticando...</div>

<form id="form-cadastrar" class="form">
    <label>Email:</label>
    <input type="email" name="email" placeholder="email">
    <label>Senha:</label>
    <input type="password" name="password" placeholder="password">
    <button>Logar</button>
</form>
<?php FilesPath::templateFooter(); ?>