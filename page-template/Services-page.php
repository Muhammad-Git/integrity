<?php /* Template Name: Services - Page Template */ ?>
<?php get_header(); ?>

    <section class="home-sec-2 ser-sec-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading after text-center center">
                    <?php echo the_content();?>
                    </div>
                </div>
            </div>

            <div class="row ">
            	<?php    $x=1;  $args = array( 'post_type' => 'services' , 'posts_per_page' => '2','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>
                <div class="col-lg-6 col-md-12">
                    <div class="box">
                        <div class="img-box">
                            <img src="<?php echo the_post_thumbnail_url();?>" class="img-fluid w-100" alt="">
                        </div>
                        <div class="text">
                            <h3><a href="<?php the_permalink(); ?>"><?php echo the_title();?> </a></h3>
                            <?php if( have_rows('services_content_repeater') ):?>
			                  <ul>
			                     <?php while( have_rows('services_content_repeater') ) : the_row();?>
			                     <li><a href="<?php echo the_sub_field('link'); ?>"><?php echo the_sub_field('content');?></a></li>
			                     <?php endwhile;?>
			                  </ul>
			                 <?php endif;?>
                        </div>
                    </div>
                </div>
                <?php $x++; endwhile; wp_reset_query(); ?>
                
                

                
            </div>
        </div>
    </section>



<?php get_footer();?>