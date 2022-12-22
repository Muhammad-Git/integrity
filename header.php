<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" />-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lib.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<title><?php bloginfo( 'title' ); ?></title>
<?php wp_head();?>
</head>
<?php
global $options;
global $logo;
global $copyrite;
$options = get_option('cOptn');
$logo = $options['logo'];
$copyrite = $options['copyrite'];
$size = 344;
$options['logo'] = wp_get_attachment_image($logo, array($size, $size), false);
$att_img = wp_get_attachment_image($logo, array($size, $size), false);
$logoSrc = wp_get_attachment_url($logo);
$att_src_thumb = wp_get_attachment_image_src($logo, array($size, $size), false);
?>
<body <?php body_class(); ?>>

<header class="sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="<?php echo site_url();?>"><img src="<?php echo $logoSrc;?>" class="img-fluid" alt=""></a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="nav-list">
                    	<?php wp_nav_menu(array('menu'=>'Header Menu','menu_class'=>''))?>
                        <!-- <ul>
                            <li><a href="index.php" class="home-active">Home </a></li>
                            <li><a href="about.php" class="about-active">About Us </a></li>
                            <li><a href="services.php" class="services-active">Services  </a></li>
                            <li><a href="">Mortgage Calculator </a></li>
                            <li><a href="faq.php" class="faq-active">FAQ </a></li>
                            <li><a href="contact.php" class="t-btn m-0">Contact Us </a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
</header>

<?php if(is_home() || is_front_page() ){ $hpb = get_field('home_page_banner'); ?>

<style>
    header .nav-list ul li a.home-active{
    color: #ac9374;
    font-family: "FuturaLT-Heavy";
}

header .nav-list ul li a.home-active::after{
    width: 100%;
}
</style>

    <section class="home-banner" style="background-image: url(<?php echo $hpb['banner_image'];?>);">
        <div class="social">
            <a href="<?php echo $options['facebook']; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="<?php echo $options['twitter']; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="<?php echo $options['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <a href="<?php echo $options['youtube']; ?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/follow.png" class="img-fluid" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text">
                        <div class="heading">
                            <?php echo $hpb['title'];?>
                        </div>
                        <p><?php echo $hpb['content'];?></p>
                        <a href="<?php echo $hpb['page_link_1'];?>" class="t-btn mr-3"><?php echo $hpb['button_title_1'];?></a> <a href="<?php echo $hpb['page_link_2'];?>" class="t-btn white-btn"><?php echo $hpb['button_title_2'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php } else{?>


<?php if( get_field('bannerimage') ) {

$BannerImage = get_field('bannerimage');

}else{

$BannerImage =  get_template_directory_uri().'/assets/images/about/title.jpg';

}?>

<?php if(get_field('bannerheading') ) {

$BannerHeading = get_field('bannerheading');

}else{

$BannerHeading =  get_the_title();

}?>
<style>
    header .nav-list ul li a.about-active{
    color: #ac9374;
    font-family: "FuturaLT-Heavy";
}

header .nav-list ul li a.about-active::after{
    width: 100%;
}
</style>


<section class="page-title" style="background-image:url('<?php echo $BannerImage; ?>')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2><?php echo $BannerHeading; ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<?php } ?>



