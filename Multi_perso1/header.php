<!DOCTYPE html>
<html lang="fr-ca">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>


    <?php wp_head(); ?>

</head>
<body>
<header>
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="navigation">
            <div class="container">
                <div class="navbar-header">
                    <div class="navbar-brand">
                        <a href="<?php echo home_url( '/' ); ?>"><h1>Mica Branding</h1></a>
                    </div>
                </div>

                <div class="navbar-collapse collapse">
                    <div class="menu">
                        <?php wp_nav_menu(
                            array(
                                'theme_location' 		=> 'menu_principal',
                                'container_class'      	=> 'menu',
                                'menu_class'			=> 'nav nav-tabs'
                            )
                        ); ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>