<?php /* Template Name: FAQ,s - Page Template */ ?>
<?php get_header(); ?>
<section class="home-sec-3">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="text">
               <div class="heading center after text-center">
                 <?php the_content();?>
               </div>
              <div id="main">
                  <div class="">
                     <div class="accordion" id="faq">
                        <?php if( have_rows('section_1') ):?>
                         <?php $x=1; while( have_rows('section_1') ) : the_row();?>
                        <div class="card">
                           <div class="card-header" id="faqhead<?php echo $x;?>">
                              <a href="#" class="<?php if($x==1)
                                 { echo "btn btn-header-link" ; } 
                                 
                                 else
                                 
                                 { echo  "btn btn-header-link collapsed" ; }?>" 
                                 data-toggle="collapse" data-target="#faq<?php echo $x;?>"
                                 aria-expanded="true" aria-controls="faq<?php echo $x;?>"><?php echo the_sub_field('question'); ?></a>
                           </div>
                           <div id="faq<?php echo $x;?>" class="<?php if($x==1)
                              { echo "collapse show"; } 
                              
                              else
                              
                              { echo "collapse"; }?>" 
                              aria-labelledby="faqhead<?php echo $x;?>" data-parent="#faq">
                              <div class="card-body">
                                 <p><?php echo the_sub_field('answer'); ?></p>
                                 
                              </div>
                           </div>
                        </div>
                        <?php $x++; endwhile;?>
                        <?php endif;?>
                     </div>
                  </div>
               </div> 
              
            </div>
         </div>
      </div>
   </div>
</section>
<?php get_footer();?>