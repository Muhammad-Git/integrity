<?php /* Template Name: Home - Page Template */ ?>
<?php get_header(); 
   $s1 = get_field('section_1');
   $s2 = get_field('section_2');
   $s3 = get_field('section_3');
   ?>
<section class="home-sec-1">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6 col-md-12">
            <div class="img-box">
               <img src="<?php echo $s1['image'];?>" class="img-fluid" alt="">
            </div>
         </div>
         <div class="col-lg-6 col-md-12">
            <div class="text">
               <div class="heading after">
                  <?php echo $s1['title'];?>
               </div>
               <?php echo $s1['content'];?>
               <?php if( have_rows('section_1')) : while ( have_rows('section_1') ) : the_row(); ?>
               <ul class="t-list">
                  <?php if( have_rows('section_1_repeater') ): while ( have_rows('section_1_repeater') ) : the_row(); ?>
                  <li><?php echo get_sub_field('title'); ?></li>
                  <?php endwhile; endif; ?>
               </ul>
               <?php endwhile; endif; ?>
               <a href="<?php echo $s1['page_link'];?>" class="t-btn"><?php echo $s1['button_title'];?></a>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="home-sec-2">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="heading after text-center heading-white center">
               <?php echo $s2['title'];?>
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
                  <h3><a href="javascript:;"><?php echo the_title();?> </a></h3>
                  <?php if( have_rows('services_content_repeater') ):?>
                  <ul>
                     <?php while( have_rows('services_content_repeater') ) : the_row();?>
                     <li><a href="<?php echo the_sub_field('link');?>"><?php echo the_sub_field('content');?></a></li>
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
<section class="home-sec-3">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="text">
               <div class="heading center after text-center">
                  <?php echo $s3['title'];?>
               </div>
               <div id="main">
                  <div class="">
                     <div class="accordion" id="faq">
                        <?php if( have_rows('section_3')) : while ( have_rows('section_3') ) : the_row(); ?>
                        <?php if( have_rows('section_3_repeater') ): $x=1; while ( have_rows('section_3_repeater') ) : the_row(); ?>
                        <div class="card">
                           <div class="card-header" id="faqhead<?php echo $x;?>">
                              <a href="#" class="<?php if($x==1)
                                 { echo "btn btn-header-link" ; } 
                                 
                                 else
                                 
                                 { echo  "btn btn-header-link collapsed" ; }?>" 
                                 data-toggle="collapse" data-target="#faq<?php echo $x;?>"
                                 aria-expanded="true" aria-controls="faq<?php echo $x;?>"><?php echo get_sub_field('question'); ?></a>
                           </div>
                           <div id="faq<?php echo $x;?>" class="<?php if($x==1)
                              { echo "collapse show"; } 
                              
                              else
                              
                              { echo "collapse"; }?>" 
                              aria-labelledby="faqhead<?php echo $x;?>" data-parent="#faq">
                              <div class="card-body">
                                 <p><?php echo get_sub_field('answer'); ?></p>
                              </div>
                           </div>
                        </div>
                        <?php $x++;endwhile; endif; ?>
                        <?php endwhile; endif; ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="home-sec-4">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="text">
               <div class="heading center after text-center">
                  <h6>Contact Us</h6>
                  <h2>Get In Touch</h2>
               </div>
               <div class="mt-4">
                 <?php echo do_shortcode('[contact-form-7 id="180" title="Contact form ( Get In Touch )"]');?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php get_footer(); ?>