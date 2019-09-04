<?php
/* Template Name: Gabarit personnalisé */
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?></title>

        <!-- Bootstrap -->
        <?php wp_head(); ?>


    </head>
<body>

<!-- Entête/navabar-->
<header>
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand">
                        <a href="index.html"><h1>AEC Design Web</h1></a>
                    </div>
                    <div id="navmenu">
                        <?php wp_nav_menu(
                            array(
                                'theme_location'    => 'menu_principal',
                                'container'         => 'nav',
                            )
                        ); ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>


<section id="blog" class="container">
    <div class="text-left">
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
    <div class="blog">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-item blog-content">

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <?php the_content(); ?>

                            <div class="entry-meta">
                                <span><i class="fa fa-user"></i> Écrit par <a href="#"><?php the_author(); ?></a></span>
                                <span><i class="fa fa-comment"></i> <a href="#"><?php comments_number(); ?></a></span>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div><!--/.blog-item-->
                <h2>Commentaires</h2>
            </div><!--/.col-md-8-->
        </div><!--/.row-->
    </div>
</section><!--/#blog-->


<!-- Sidebar -->
<?php get_sidebar(); ?>
<!-- Footer -->
<?php get_footer(); ?>