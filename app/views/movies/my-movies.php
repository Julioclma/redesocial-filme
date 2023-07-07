<?php

use Aplication\helpers\path\FilesPath;

FilesPath::templateHeader();
?>

<div>meus filmes...</div>

<?php 
FilesPath::templateCardsMovies() ?>


<?php FilesPath::templateFooter(); ?>