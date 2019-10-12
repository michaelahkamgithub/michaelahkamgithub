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

<!-- Bannière -->
<div id="banniere">
    <img src="<?php bloginfo('stylesheet_directory');?>/img/accueil.png">
</div><!-- Fin-Bannière -->

<!-- Zone principale de contenu -->
<div id="contenu" class="container">
    <section id="principal">

        <?php if( have_posts() ) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <article>
                    <h3><?php the_title(); ?></h3>
                    <?php the_post_thumbnail('medium');?>
                    <?php the_excerpt(); ?>
                    <a class="more-link" href="<?php the_permalink(); ?>">Lire la suite&hellip;</a>
                </article>

            <?php endwhile; ?>
        <?php else: ?>
            <p>Aucun article disponible</p>
        <?php endif; ?>


    </section>

    <!-- Zone secondaire de contenu -->
    <aside>

        <h3>Les à-côtés</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus sollicitudin. Vestibulum condimentum  facilisis nulla. In hac habitasse platea dictumst. Nulla nonummy. Cras quis libero.</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. Vestibulum condimentum  facilisis nulla. In hac habitasse platea dictumst. Nulla nonummy. Cras quis libero.</p>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. Nulla nonummy. Cras quis libero.</p>
    </aside>

</div>

<!-- Pied de page -->
<footer>
    ©2017, Société des célébrations du 375e anniversaire de Montréal - Exercice WordPress Thème
</footer>

</body>

</html>
