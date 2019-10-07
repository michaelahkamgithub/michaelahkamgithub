<?php
function add_theme_scripts() {
    wp_enqueue_style( 'BootstrapCSS', get_stylesheet_directory_uri(). '/css/bootstrap.css');
    wp_enqueue_style( 'StyleCSS', get_stylesheet_directory_uri(). '/css/style.css');
    wp_enqueue_style( 'AnimateCSS', get_stylesheet_directory_uri(). '/css/animate.css');



    wp_enqueue_script ('JS', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js');
    wp_enqueue_script ('WowJS',get_template_directory_uri() . '/js/wow.min.js');
    wp_enqueue_script ('JqueryJS',get_template_directory_uri() . '/js/jquery-3.3.1.js');
    wp_enqueue_script ('BootstrapJS',get_template_directory_uri() . '/js/bootstrap.js');


}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts');

function enregistrer_menu() {
    register_nav_menu( 'menu_principal', 'Menu principal');
}
add_action( 'init', 'enregistrer_menu');


