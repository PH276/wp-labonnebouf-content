<?php get_header() ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
        <!-- debut HTML -->
        <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
        <div class="contenu">
            <?php the_content() ?>
        </div>
        
        <p class="postmetada">Retour à la catétorie <?php the_category('&gt') ?></p><br>

        <?php $photo = getField('photo'); ?>
        <?php $adresse = getField('adresse'); ?>
        <?php $carte = getField('carte'); ?>
        <?php $telephone = getField('tel'); ?>
        <?php $type_de_cuisine = getField('type_de_cuisine'); ?>
        <?php $promotion = getField('promotion'); ?>
        <?php $brunch = getField('brunch'); ?>
        <?php $horaires = getField('horaires'); ?>
        <?php $prix_moyen = getField('prix_moyen'); ?>
        <?php $la_carte = getField('la_carte'); ?>
        <?php $acces = getField('aces'); ?>



        <div class = "photo">
            <img src="<?= $photo->value; ?>" alt="" width="200">
        </div>
        <div class = "telephone"><?= $telephone->label?> : <?= $telephone->value ?>
        </div>
        <div class = "type_de_cuisine"><?= $type_de_cuisine->label?> : <?= $type_de_cuisine->value ?>
        </div>
        <div class = "promotion">
            <?= ($promotion->value)?'Promotion':''  ?>
        </div>
        <div class = "brunch">
            <?= ($brunch->value)?'Brunch':''  ?>
        </div>
        <div class = "horaires"><?= $horaires->label?> : <?= $horaires->value ?>
        </div>
        <div class = "prix_moyen"><?= $prix_moyen->label?> : <?= $prix_moyen->value ?>
        </div>
        <div class = "la_carte"><?= $la_carte->label?> : <?= $la_carte->value ?>
        </div>
        <div class = "acces"><?= $acces->label?> : <?= $acces->value ?>
        </div>






        <!-- fin HTML -->
    <?php endwhile; ?>
<?php endif; ?>




<?php get_footer() ?>
