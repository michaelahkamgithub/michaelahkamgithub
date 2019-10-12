<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name');?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/layout.css"/>
</head>

<body>
<!-- Entête -->
<header>
    <div class="container">
        <img id="logo" src="<?php bloginfo('stylesheet_directory');?>/img/mtl-icon-logo-fr.png">

        <!-- Navigation -->
        <nav>
            <ul>
                <li><a href="index.html" class="actif">Accueil</a></li>
                <li><a href="apropos.html">À propos</a></li>
                <li><a href="blogue.html">Blogue</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>

    </div>
</header> <!-- Fin-Entête -->

<!-- Zone principale de contenu -->
<div id="page" class="container">

    <?php if( have_posts() ) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <h2><?php the_title(); ?></h2>

            <?php the_content(); ?>

        <?php endwhile; ?>
    <?php else: ?>
        <p>Aucun article disponible</p>
    <?php endif; ?>

</div>

<!-- Pied de page -->
<footer>
    ©2017, Société des célébrations du 375e anniversaire de Montréal - Exercice WordPress Thème
</footer>

</body>

</html>
