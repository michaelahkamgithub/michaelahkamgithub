<?php

function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() . '/style.css' );
    wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css' );
    wp_enqueue_style( 'jquery.bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css' );
    wp_enqueue_style( 'isotop', get_template_directory_uri() . '/css/eisotop.css' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
    wp_enqueue_style( 'jquery.fancybox', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.css' );
    wp_enqueue_style( 'prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css' );
    wp_enqueue_style( 'css.style', get_template_directory_uri() . '/css/style.css' );

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.1.min.js' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js' );
    wp_enqueue_script( 'wow.min', get_template_directory_uri() . '/js/wow.min.js' );
    wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.pack.js' );
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js' );
    wp_enqueue_script( 'bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js' );
    wp_enqueue_script( 'prettyPhoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js' );
    wp_enqueue_script( 'isotope.min', get_template_directory_uri() . '/js/jquery.isotope.min.js' );
    wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/functions.js' );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js' );

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function enregistre_mon_menu() {
    register_nav_menu( 'menu_principal', __( 'Menu principal' ) );
}
add_action( 'init', 'enregistre_mon_menu' );


add_theme_support('post-thumbnails');
set_post_thumbnail_size( 258, 145, true );


function enregister_widgets() {

    register_sidebar(
        array(
            'name'          => 'Barre latérale',
            'id'            => 'sidebar-1',

        ) );

}
add_action( 'widgets_init', 'enregister_widgets' );
