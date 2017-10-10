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

// permet d'ajouter une cle API pour google map
function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyBdEy0vka7sGKD6V7dR0bpnC779QUEEAvo';

	return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// fonction permettant de récupérer les informations sur un champ
function getField($field){ // notre fn getField($field) va construire un objet avec les informations à l'intérieur
    $info = get_field_object($field);
    $obj = new StdClass();
    $obj->label = $info['label'];
    $obj->value = $info['value'];
    return $obj;
}

// ---------------------------------------------------
//  affichage catégories
function showCategory(){
    $cat = '';
    $categories = get_categories (array(
        'category_name' => 'ville',
        'orderby' => 'name',
        'exclude' => 1
    ));
    echo '<pre>';
    //print_r ($categories);
    echo'</pre>';
    foreach ($categories as $category) {
        $cat .= '<a href = "'. get_category_link($category->term_id) . '">' . $category->name . '</a><br>';
    }
    return $cat;
}

// ---------------------------------------------------
// permet de relier un restaurant à une catégorie
function showCategoryByPostType ($type){
    $current_cat = get_query_var('cat');
    query_posts("post_type=$type&cat=$current_cat");
}

// ---------------------------------------------------
function getImage(){
    $content = '';
    $images = get_children();
    //'post_parent=' , get_the_ID() . '&post_type=attachement&post_mime_type=image&post_per_page=10'
    echo '<pre>';
//    print_r ($images);
    echo '<pre>';
    foreach($images as $image_id => $a){
        $content .= wp_get_attachment_image ($a, 'medium');
    }
    return $content;
}
