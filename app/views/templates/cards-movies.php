<?php if (!empty($params['movies'])) : ?>
    <section id="cards">
        <?php foreach ($params['movies'] as $key => $movie) : ?>
            <div class="container-card">
                <div class="header-card">
                    <img src="<?= $movie['image'] ?>">
                    </img>
                </div>
                <div class="content-card">
                    <div>
                        <div> <span class="span-content-card"><?= $movie['title'] ?></span></div>
                        <div>
                            <h2 class="h2-content-card"><?= $movie['title'] ?></h2>
                        </div>
                        <div>
                            <p class="p-content-card"><?= $movie['description'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="footer-card">
                    <div class="footer-card-content">
                        <span class="span-footer-card">Avaliar</span>
                        <span class="span-footer-card">Conhecer</span>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
<?php endif; ?>