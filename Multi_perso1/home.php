
<?php get_header(); ?>

<section id="blog" class="container">
    <div class="text-center">
        <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>

    <div class="blog">
        <div class="row">
            <div class="col-md-8">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <div class="blog-item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-2 text-center">
                                    <div class="entry-meta">
                                        <span id="publish_date"><?php the_time('m/j/y') ?></span>
                                        <span><i class="fa fa-user"></i> <a href="#"><?php the_author(); ?></a></span>
                                        <span><i class="fa fa-comment"></i> <a href="#"><?php the_category( ' ' ); ?></a></span>
                                        <span><i class="fa fa-heart"></i><a href="#"><?php the_tags( ' ' ); ?></a></span>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-10 blog-content">
                                    <?php the_post_thumbnail ('large'); ?>
                                    <h4><?php the_title(); ?></h4>
                                    <?php the_excerpt(); ?>
                                    <a class="btn btn-primary readmore" href="<?php the_permalink(); ?>">Lire la suite <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>

                <?php else : ?>
                    <p>Aucun article</p>
                <?php endif; ?>


                <ul class="pagination pagination-lg">
                    <li><a href="#"><i class="fa fa-long-arrow-left"></i>Page précédente</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">Page suivante<i class="fa fa-long-arrow-right"></i></a></li>
                </ul>
            </div>

            <aside class="col-md-4">
                <div class="widget search">
                    <h3></h3>
                    <form role="form">
                        <input type="text" class="form-control search_box" autocomplete="off" placeholder="Tapez votre recherche ici">
                    </form>
                </div>

                <div class="widget categories">
                    <h3></h3>
                    <div class="row">
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>

                <div class="widget archieve">
                    <h3></h3>
                    <div class="row">
                        <div class="col-sm-12">

                        </div>
                    </div>
                </div>

                <div class="widget tags">
                    <h3></h3>

                </div>
            </aside>
        </div>
    </div>
</section>



<?php get_footer(); ?>