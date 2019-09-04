<!-- Header -->

<?php get_header(); ?>


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

                    <?php the_post_thumbnail ('medium_large'); ?>
                    <?php the_content(); ?>

                    <h5 id="publish_date">Publié le <?php the_time('m/j/y') ?><h5>
                            <div class="entry-meta">
                                <span><i class="fa fa-user"></i> Écrit par <a href="#"><?php the_author(); ?></a></span>
                                <span><i class="fa fa-bookmark"></i> <a href=""><?php the_category( ' ' ); ?></a></span>
                                <span><i class="fa fa-comment"></i> <a href="#"><?php comments_number(); ?></a></span>
                            </div>

                            <?php endwhile; ?>
                            <?php endif; ?>
                </div><!--/.blog-item-->
                <h2>Commentaires</h2>

                <div class="comments">
                    <form role="form">
                        <div class="form-group">

                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Votre nom">
                        </div>

                        <div class="form-group">

                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Votre courriel">
                        </div>

                        <textarea class="form-control" rows="9" placeholder="Votre commentaire"></textarea>
                        <button type="submit" class="btn btn-primary">Commenter</button>
                    </form>

                </div>

                <nav>
                    <ul class="pager">
                        <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Article précédent</a></li>
                        <li class="next"><a href="#">Article suivant <span aria-hidden="true">&rarr;</span></a></li>
                    </ul>
                </nav>

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


<!-- Sidebar -->
<?php get_sidebar(); ?>
<!-- Footer -->
<?php get_footer(); ?>