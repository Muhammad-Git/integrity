

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="box-1 text-center">
                        <div class="logo">
                            <a href="">
                                <img src="assets/images/f-logo.png" class="img-fluid" alt="">
                            </a>
                        </div>
    
                        <div class="f-icon">
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="https://youtube.com/" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="box box-2">
                        <h3>Quick Links</h3>
                        <div class="links">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="services.php">Services </a></li>
                                <li><a href="">Mortgage Calculator</a></li>
                                <li><a href="faq.php">FAQ</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="box box-3">
                        <h3>Contact Info</h3>
                        <div class="links">
                            <ul>
                                <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i> 1294 Ruth Jackson Bogart, <br> GA 30622</a></li>
                                <li><a href="mailto:pgoldberger@IH-Lending.com"><i class="fa fa-envelope" aria-hidden="true"></i> pgoldberger@IH-Lending.com</a></li>
                                <li><a href="tel:(404) 452-7174"><i class="fa fa-phone" aria-hidden="true"></i> (404) 452-7174</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="img-box">
                        <img src="assets/images/home/equal.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="f-btm text text-center">
                        <p>Intergrity Home Lending © 2022. Made with <strong>Love</strong> By <a href="http://insitech.ae/" target="_blank">Insitech</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <a id="scroll-top"></a>


    <script src="assets/js/wow-animate.js"></script>
    <script src="assets/js/lib.js"></script>
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
</body>
</html>