<?php get_header(); ?>

		<!-- Zone principale de contenu -->
		<div id="page" class="container">

			<?php if( have_posts() ) : ?>

				    <?php while (have_posts()) : the_post(); ?>

				    	<h2><?php the_title(); ?></h2>

						<?php the_content(); ?>
							        

				    <?php endwhile; ?>

				<?php else: ?>
				    <p>Aucun article disponible!</p>
				<?php endif; ?>


		</div>

<?php get_footer(); ?>