<?php

use Aplication\helpers\path\FilesPath;
use Aplication\routes\Routes;

FilesPath::templateHeader();

?>

<div class="title">Registrando...</div>

<form id="form-cadastrar" action="<?= Routes::routes()['add-user']['url'] ?>" class="form" method="<?= Routes::routes()['add-user']['reqType'] ?>">
    <label>Name:</label>
    <input type="text" name="name" placeholder="name">
    <label>Surname:</label>
    <input type="text" name="lastname" placeholder="sobrenome">
    <label>Email:</label>
    <input type="email" name="email" placeholder="email">
    <label>Senha:</label>
    <input type="password" name="password" placeholder="password">
    <input type="password" name="confirm_password" placeholder="confirme sua senha">
    <button>Cadastrar</button>
</form>

<?php FilesPath::templateFooter(); ?>