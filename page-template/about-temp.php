<?php /* Template Name: About - Page Template */ ?>
<?php get_header(); 
$s1 = get_field('section_1',27);
$s2 = get_field('section_2');
?>

<section class="home-sec-1 about-sec-1">
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
                 <?php if( have_rows('section_1',27)) : while ( have_rows('section_1',27) ) : the_row(); ?>
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
      <div class="row">
         <div class="col-md-12">
            <div class="text text-2">
               <h4><?php echo $s2['title__our_mission_'];?></h4>
               <p><?php echo $s2['content__our_mission_'];?></p>
            </div>
            <div class="text text-2">
               <h4><?php echo $s2['title__our_vision_'];?></h4>
               <p><?php echo $s2['content__our_vision_'];?> </p>
            </div>
            <div class="text text-3">
               <?php echo $s2['content__our_values_'];?>
            </div>
            <div class="text text-4">
               <ul>
               	<?php if( have_rows('section_2')) : while ( have_rows('section_2') ) : the_row(); ?>
               		<?php if( have_rows('section_2_repeater') ): while ( have_rows('section_2_repeater') ) : the_row(); ?>    
                  <li>
                     <?php echo get_sub_field('content'); ?>
                  </li>
                      <?php endwhile; endif; ?>
                  <?php endwhile; endif; ?>

               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<?php get_footer(); ?>