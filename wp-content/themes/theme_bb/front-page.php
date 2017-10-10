<?php get_header() ?>

<h1>Accueil</h1>

<?php echo showCategory() ?>


<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
        <!-- debut HTML -->
        <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
        <div class="contenu">
            <?php the_content() ?>
        </div>







        <!-- fin HTML -->
    <?php endwhile; ?>
<?php endif; ?>




<?php get_footer() ?>
