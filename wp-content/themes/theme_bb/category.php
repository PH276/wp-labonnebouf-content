<?php get_header() ?>

<?php showCategoryByPostType('restaurant'); ?>


<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
        <!-- debut HTML -->
        <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
        <div class="contenu">
            <?= getImage(); ?>
            <!-- <a href="<?php //the_permalink(); ?>"><?php //echo $visuel; ?></a> -->
        </div>







        <!-- fin HTML -->
    <?php endwhile; ?>
<?php endif; ?>




<?php get_footer() ?>
