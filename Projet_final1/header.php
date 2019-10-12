<!DOCTYPE html>
<html lang="fr-ca">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/animate.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Salon de massage à Gatineau."/>
    <meta name ="keywords" content= "Massothérapie, massothérapeute, réflexologie, massage, bien-être, détente, massage gatineau, massothérapie gatineau, massothérapeute gatineau">
    <meta name="author" content="Michael Ah Kam">
    <link rel="icon" type="image/png" href="wp-content/themes/projetFinal/img/Favicon.jpg"/>

    <?php wp_head(); ?>
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-menu fixed-top py-3">
    <a class="navbar-brand js-scroll-trigger" href="<?php echo home_url( '/' ); ?>"><img src="wp-content/themes/projetFinal/img/Sylvie%20massé.png" height="65" width="225" alt="Mon logo" title="Mon logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary', // Defined when registering the menu
            'container' => false,
            'depth' => 2,
            'menu_class' => 'navbar-nav ml-auto',
            'walker' => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
            'fallback_cb' => 'Bootstrap_NavWalker::fallback', // For menu fallback
        ) );
        ?>
        <a class="nav-link js-scroll-trigger texteVert" href="https://www.moleculesenaction.ca/default.asp" target="_blank">Molécules en action</a>
        <div class="navbar-nav ml-auto">
            <a href="https://www.facebook.com/bkcommunication/" target="_blank"><i class="fab fa-facebook-square fa-3x"></i></a>
        </div>
    </div>
</nav>