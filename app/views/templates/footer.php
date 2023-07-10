     <?php

        use Aplication\routes\Routes;

        ?>
     </main>
     <footer>
         <div>
             <ul>
                 <li><a href="<?= Routes::routes()['add-movie']['url'] ?>">Adicionar Filme</a></li>
                 <li><a href="<?= Routes::routes()['add-review']['url'] ?>">Adicionar critica</a></li>
             </ul>
         </div>
     </footer>
     </body>

     </html>