<?php
// initialisation de notre menu :
// add_action() : ajoute une fonction à une prédéfinie par WP

add_action('init', 'poles_init_menu');

function poles_init_menu(){
    if (function_exists('register_nav_menu')){
        register_nav_menu('Principal', __('Principal', 'theme_bb'));
    }
}

add_action('widgets_init', 'eprojet_init_side_bar');

// régions widgets
function eprojet_init_side_bar(){
    if (function_exists('register_sidebar')){

        register_sidebar(array(
            'name'  => __('region-entete', 'eprojet'),
            'id'    => 'region-entete',
            'description'  => __('vous pouvez placer les widgets ds la region entete', 'eprojet')
        ));

        register_sidebar(array(
            'name'  => __('region-entete2', 'eprojet'),
            'id'    => 'region-entete2',
            'description'  => __('vous pouvez placer les widgets ds la region entete', 'eprojet')
        ));

        register_sidebar(array(
            'name'  => __('colonne de droite', 'eprojet'),
            'id'    => 'colonne de droite',
            'description'  => __('vous pouvez placer les widgets ds la colonne de droite', 'eprojet')
        ));

        register_sidebar(array(
            'name'  => __('region-footer', 'eprojet'),
            'id'    => 'region-footer',
            'description'  => __('vous pouvez placer les widgets ds la region footer', 'eprojet')
        ));

    }
}
