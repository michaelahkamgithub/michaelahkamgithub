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
							<p>Publié le <?php the_date(); ?></p>
							<p>Écrit par: <a href=""><?php the_author(); ?></a> dans <a href=""><?php the_category(); ?></a></p>
		                    <?php the_post_thumbnail(); ?>
							<?php the_content(); ?>

						</article>

				    <?php endwhile; ?> //Fin du while

				<?php else: ?>
				    <p>Aucun article disponible!</p>
				<?php endif; ?>


			</section>

	
		</div>

<?php get_footer(); ?>