<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">
    <title><?php bloginfo('name'); wp_title(' - ') ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
    <header>
        <div id="informations">
            <a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('template_directory') ?>/assets/logo.png" alt=""></a>
        </div>
        <nav>
            <!-- le menu sera administré par l'admin -->
            <?php wp_nav_menu(array('theme_location' => 'Principal')) ?>
        </nav>
        <div id="description">
            <p class="text-description"><?php bloginfo('description') ?></p>
        </div>
    </header>

    <section>
            <div class="conteneur">
