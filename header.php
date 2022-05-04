<!DOCTYPE html>
<html lang="en">

<head>
      
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
  <?php bloginfo('name'); ?>
  <?php wp_title(); ?>
  <?php if(is_front_page()){ echo ' | '; bloginfo('description'); }?>
  
     </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="icon">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href=" <?php echo get_template_directory_uri(); ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.7.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="index.html"><?php //echo get_bloginfo(); ?></a></h1>
 -->       <h1 class="logo me-auto"><a href="<?php echo site_url('/') ?>"><?php bloginfo( 'name' ); ?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
         <?php 
            wp_nav_menu(array('theme_location'=>'my-custom-menu', 'menu_class'=>'navbar')); 
          ?>
 



                  <!-- <ul>
           <li><a class="active" href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="courses.html">Courses</a></li>
          <li><a href="trainers.html">Trainers</a></li>
          <li><a href="events.html">Events</a></li>
          <li><a href="pricing.html">Pricing</a></li>
 
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
         -->  <!-- </li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i> -->
      </nav><!-- .navbar -->

     <!--  <a href="courses.html" class="get-started-btn">Get Started</a> -->
<!--       <div class="col-lg-4 col-md-6 footer-newsletter">
             
            <form action="" method="post">
              <input type="email" placeholder="Serach Posts" name="email">
              <input type="submit" class="get-started-btn value="Search">
            </form>
                    
</div>
 -->
<!-- <?php //function custom_search_form( $form, $value = "Search", $post_type = 'post' ) {
    $form_value = //(isset($value)) ? $value : attribute_escape(apply_filters('the_search_query', get_search_query()));
    $form //= '<form method="get" id="searchform" action="' . get_option('home') . '/" >
    // <div>
    //     <input type="hidden" name="post_type" value="'.$post_type.'" />
    //     <input type="text" value="' . $form_value . '" name="s" id="s" />
    //     <input type="submit" id="searchsubmit" value="'.attribute_escape(__('Search')).'" />
    // </div>
    // </form>';
    // return $form;
//}
?>
 -->

 <div class="col-lg-4 col-md-6 header-newsletter" >
  <form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
  <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'You Can Search Here…', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
  <button type="submit" role="button" class="btn btn-default right"/><span class="glyphicon glyphicon-search white"></span>Search</button>
</form>
            <!-- <form action="" method="post" >
              <input type="text" placeholder="You can search here..." name="text"><input type="submit"  value="Search">
            </form>
 -->         <!--    <?php //do_shortcode('[ivory-search id="309" title="Default Search Form"]'); ?>
 <?php //echo do_shortcode('[STORE-LOCATOR]'); ?>
 -->
          </div>

    </div>
  </header><!-- End Header -->
