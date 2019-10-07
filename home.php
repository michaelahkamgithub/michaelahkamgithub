<?php get_header(); ?>

		<!-- Bannière -->
		<div id="banniere">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/img/accueil.png">
		</div><!-- Fin-Bannière -->

		<!-- Zone principale de contenu -->
		<div id="contenu" class="container">
			<section id="principal">

				<?php if( have_posts() ) : ?>

				    <?php while (have_posts()) : the_post(); ?>

				        <article>
							<h3><?php the_title(); ?></h3>
		                    <?php the_post_thumbnail('medium'); ?>
							<?php the_excerpt(); ?>
							<a class="more-link" href="<?php the_permalink(); ?>">Lire la suite&hellip;</a>
						</article>

				    <?php endwhile; ?> //Fin du while

				<?php else: ?>
				    <p>Aucun article disponible!</p>
				<?php endif; ?>


			</section>

			<?php get_sidebar(); ?>

		</div>

<?php get_footer(); ?>