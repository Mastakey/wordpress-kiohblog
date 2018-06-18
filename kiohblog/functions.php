<?php 
function init_styles(){
    wp_register_style( 'Font_Awesome', '//use.fontawesome.com/releases/v5.0.13/css/all.css' );
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('Font_Awesome');
}

//Widget Init
function init_widget(){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar'
    ));
}

add_action('wp_enqueue_scripts', 'init_styles');
add_action('widgets_init', 'init_widget');

//Navigation Menus
register_nav_menus(array(
    'primary_nologin' => __( 'Primary No Login' ),
    'primary_login' => __( 'Primary Login' ),
    'footer' => __( 'Footer Menu' )
));



//Get top ancestor
function get_top_ancestor_id(){

    global $post;

    if ($post->post_parent){
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    return $post->ID;
}

function has_children(){
    global $post;
    $pages = get_pages('child_of=' . $post->ID);
    return count($pages);
}

function custom_excerpt_length(){
    return 25;
}

add_filter('exerpt_length', 'custom_excerpt_length');

?>
