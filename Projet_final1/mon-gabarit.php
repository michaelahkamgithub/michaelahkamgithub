<?php
/* Template Name: Mon Gabarit personnalisé */
?>

<?php get_header(); ?>

		<!-- Bannière -->
		<div id="banniere">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/img/accueil.png">
		</div><!-- Fin-Bannière -->

		<!-- Zone principale de contenu -->
		<div id="contenu" class="container">
			<section class="full-width">

				<?php if( have_posts() ) : ?>

				    <?php while (have_posts()) : the_post(); ?>

				        <article>
							<h3><?php the_title(); ?></h3>	
		                    
							<?php the_content(); ?>

						</article>

				    <?php endwhile; ?> 

				<?php else: ?>
				    <p>Aucun article disponible!</p>
				<?php endif; ?>


			</section>

	
		</div>

<?php get_footer(); ?>
