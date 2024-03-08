<?php 
function add_style() {

    wp_enqueue_style("root", get_template_directory_uri() . '/css/root.css');
    wp_enqueue_style("header", get_template_directory_uri() . '/css/header.css');
    wp_enqueue_style("footer", get_template_directory_uri() . '/css/footer.css');
    wp_enqueue_style("post", get_template_directory_uri() . '/css/post.css');
};

function add_script() {

    wp_enqueue_script("main", get_template_directory_uri() . '/js/main.js', array(), false, true);
};

function add_custom_header_menu(){
    register_nav_menus(array(
        'Header Menu' => 'Header Menu',
        'Footer Menu' => 'Footer Menu',
    ));
};


function add_header_menu_to_the_menu(){
    wp_nav_menu(array(
        "theme_location" => "Header Menu",
    ));
};


function extend_excerpt_length(){
    return 60;
};
function extend_excerpt_more($more){
    return "...";
};




add_filter('excerpt_length', 'extend_excerpt_length');
add_filter('excerpt_more', 'extend_excerpt_more');
add_action("wp_enqueue_scripts", "add_style");
add_action("wp_enqueue_scripts", "add_script");

add_action("init","add_custom_header_menu");

add_theme_support( 'post-thumbnails' );
?>