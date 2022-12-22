 <?php
global $options;
global $logo;
global $copyrite;
$options = get_option('cOptn');
$logo = $options['logo'];
$copyrite = $options['copyright'];
$logoSrc = wp_get_attachment_url($logo);
 ?>

<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="box-1 text-center">
                        <div class="logo">
                            <a href="">
                                <img src="<?php echo $logoSrc;?>" class="img-fluid" alt="">
                            </a>
                        </div>
    
                        <div class="f-icon">
                            <a href="<?php echo $options['facebook'];?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="<?php echo $options['twitter'];?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="<?php echo $options['linkedin'];?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="<?php echo $options['youtube'];?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="box box-2">
                        <h3>Quick Links</h3>
                        <div class="links">
                            <?php wp_nav_menu(array('menu'=>'Footer Menu','menu_class'=>''))?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="box box-3">
                        <h3>Contact Info</h3>
                        <div class="links">
                            <ul>
                                <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $options['Address']?></a></li>
                                <li><a href="mailto:<?php echo $options['email']; ?>"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $options['email']; ?></a></li>
                                <li><a href="tel:<?php echo $options['phone_number']; ?>"><i class="fa fa-phone" aria-hidden="true"></i><?php echo $options['phone_number']; ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="img-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/equal.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="f-btm text text-center">
                        <p><?php echo $options['copyright']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <a id="scroll-top"></a>
    
<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow-animate.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <script type="text/javascript">

        $(document).on('ready', function () {

            $(".lending-services").slick({
                dots: false,
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
                nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>'
            });

           


            wow = new WOW(
                {
                animateClass: 'animated',
                offset:       100,
                callback:     function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                }
                }
            );
            
            wow.init(); 
            

            var btn = $('#scroll-top');

            $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
            });

            btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop:0}, '300');
            });


            $(window).scroll(function(){
            var sticky = $('.sticky'),
                scroll = $(window).scrollTop();

            if (scroll >= 100) sticky.addClass('fixed');
            else sticky.removeClass('fixed');
            });
              
        });   
    </script>
    <script>
        $("ul#menu-header-menu li.last a").addClass("t-btn m-0");
    </script>
</body>
</html>