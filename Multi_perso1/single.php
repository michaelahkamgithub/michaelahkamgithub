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

                    <?php the_post_thumbnail ('large'); ?>
                    <?php the_content(); ?>

                    <h5 id="publish_date">Publié le <?php the_time('m/j/y') ?><h5>
                            <div class="entry-meta">
                                <span><i class="fa fa-user"></i> Écrit par <a href="#"><?php the_author(); ?></a></span>
                                <span><i class="fa fa-bookmark"></i> <a href=""><?php the_category( ' ' ); ?></a></span>
                                <span><i class="fa fa-comment"></i> <a href="#"><?php comments_number(); ?></a></span>
                            </div>

                     <?php endwhile; ?>
                     <?php endif; ?>
                </div>
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



<?php get_sidebar(); ?>

<?php get_footer(); ?>