<?php /* Template Name: Contact Us - Page Template */ ?>
<?php get_header(); ?>

<section class="home-sec-4">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="text">
               <div class="heading center after text-center">
                  <?php echo the_content()?>
               </div>
                <div class="mt-4">
                 <?php echo do_shortcode('[contact-form-7 id="180" title="Contact form ( Get In Touch )"]');?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>





<?php get_footer();?>