<?php get_header(); ?>

<?php echo do_shortcode('[metaslider id="107"]'); ?>

<!-- Zone principale de contenu -->
<div id="page" class="container">
	<section id="principal">

		<?php if( have_posts() ) : ?>

			<?php while (have_posts()) : the_post(); ?>

				<h3><?php the_title(); ?></h3>

			    <?php the_content(); ?>

			    <figure>
			        <?php the_post_thumbnail(); ?>
			    </figure>

    		<?php endwhile; ?> 

		<?php else: ?>
			<p>Aucun article disponible!</p>
		<?php endif; ?>

	</section>



</div>


<?php get_footer(); ?>