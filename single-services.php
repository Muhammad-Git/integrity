<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

	    <section class="home-sec-1 srv_inner_sec_1">
        <div class="container">
            <div class="row align-items-center">
                <div class=" col-md-12">
                    <!--<div class="img-box srv_inner_img">-->
                    <!--    <img src="<?php echo the_post_thumbnail_url()?>" class="img-fluid" alt="">-->
                    <!--</div>-->
                </div>

                <div class="col-md-12">
                    <div class="text">
                        <div class="heading after">
                          <h2><?php echo the_title();?></h2>
                        </div>
                        <p><?php the_content();?></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>