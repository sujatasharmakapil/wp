sujata-sharma <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
             <h3><?php echo get_bloginfo(); ?></h3>
           <!-- <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p> -->
             <?php the_field('mentor',30); ?>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
             <?php the_field('usefullinks',30); ?>
            <!-- <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul> -->
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Recent Posts</h4>
            
            <?php

            // The Query
            $next_args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page'=>2,
                            'orderby'=>'ID'
                            );

            $the_query = new WP_Query( $next_args );

            // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); ?>
                



                
                <li><?php the_title(); ?></li>
                <li><?php echo get_the_date('d M, Y'); ?></li>

                <?php }

            } 
            else {
                // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();
          ?>

               

            <!-- <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul> -->
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <!-- <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> -->
                    <?php the_field('joinournews',30); ?>
                    

          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span><?php echo get_bloginfo(); ?>
          </span></strong>. All Rights Reserved 
           
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
         <!--  Designed by <a href="https://bootstrapmade.com/">SUJATA-SHARMA</a> -->
           <?php the_field('designby',30); ?>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <?php the_field('sociallinks',30); ?>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

</body>

</html>