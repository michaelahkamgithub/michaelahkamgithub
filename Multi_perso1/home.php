
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
                                    <?php the_post_thumbnail ('medium_large'); ?>
                                    <h4><?php the_title(); ?></h4>
                                    <?php the_excerpt(); ?>
                                    <a class="btn btn-primary readmore" href="<?php the_permalink(); ?>">Lire la suite <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div><!--/.blog-item-->
                    <?php endwhile; ?>

                <?php else : ?>
                    <p>Aucun article</p>
                <?php endif; ?>


                <ul class="pagination pagination-lg">
                    <li><a href="#"><i class="fa fa-long-arrow-left"></i>Page précédente</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">Page suivante<i class="fa fa-long-arrow-right"></i></a></li>
                </ul><!--/.pagination-->
            </div><!--/.col-md-8-->

            <aside class="col-md-4">
                <div class="widget search">
                    <h3>Recherche</h3>
                    <form role="form">
                        <input type="text" class="form-control search_box" autocomplete="off" placeholder="Tapez votre recherche ici">
                    </form>
                </div><!--/.search-->

                <div class="widget categories">
                    <h3>Categories</h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="blog_category">
                                <li><a href="#">Computers <span class="badge">04</span></a></li>
                                <li><a href="#">Smartphone <span class="badge">10</span></a></li>
                                <li><a href="#">Gedgets <span class="badge">06</span></a></li>
                                <li><a href="#">Technology <span class="badge">25</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!--/.categories-->

                <div class="widget archieve">
                    <h3>Archives</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="blog_archieve">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2015 <span class="pull-right">(97)</span></a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2015 <span class="pull-right">(32)</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2015 <span class="pull-right">(19)</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2015 <span class="pull-right">(08)</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!--/.archieve-->

                <div class="widget tags">
                    <h3>Nuage de tags</h3>
                    <ul class="tag-cloud">
                        <li><a class="btn btn-xs btn-primary" href="#">Apple</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Barcelona</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Office</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Ipod</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Stock</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Race</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">London</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Football</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Porche</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Gadgets</a></li>
                    </ul>
                </div><!--/.tags-->
            </aside>
        </div><!--/.row-->
    </div>
</section><!--/#blog-->



<?php get_footer(); ?>