<?php get_header(); ?>


<section id="portfolio">
    <div class="container">
        <div class="col-lg-12">
            <div class="text-center">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
                            <h2><?php the_title(); ?></h2>
                        </div>
                        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
