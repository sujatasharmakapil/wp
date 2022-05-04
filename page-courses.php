 <?php get_header(); ?>

<body>

 
  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Courses</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
           <?php
        if ( get_query_var('paged') ) $paged = get_query_var('paged');
        if ( get_query_var('page') ) $paged = get_query_var('page');

        $query = new WP_Query( array( 'post_type' => 'course', 'paged' => $paged ) );

        if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <?php echo the_post_thumbnail('medium'); ?>
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><?php echo the_category(); ?></h4>
                  <p class="price"><?php the_field('price'); ?></p>
                </div>

                <h3><a href="course-details.html"><?php echo the_title(); ?></a></h3>
                <p><?php echo the_content(); ?></p>
                <!-- <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                    <span>Antonio</span>
                  </div> -->
                  <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                  <?php $trainers = new WP_Query(array(
                      'post_type' => 'trainer',
                      'post_status' => 'publish',
                      'orderby' => 'rand',
                            'meta_query' => array(
                                array(
                                    'key' => '_thumbnail_id',

                                )
                            )                   
                  ));
                  while($trainers->have_posts()) : $trainers->the_post(); ?>
                      
                    <?php endwhile; ?>
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
                      <span><?php the_title(); ?></span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <?php
                  $likeCount = new WP_Query(array(
                    'post_type' => 'like',
                    'meta_query' => array(
                      array(
                        'key' => 'liked_trainers_id',
                        'compare' => '=',
                        'value' => get_the_ID()
                      )
                    )
                  ));

                
    
                  $existStatus = 'no';
    
                  $existQuery = new WP_Query(array(
                    'author' => get_current_user_id(),
                    'post_type' => 'like',
                    'meta_query' => array(
                      array(
                        'key' => 'liked_trainers_id',
                        'compare' => '=',
                        'value' => get_the_ID()
                      )
                    )
                  ));
    
                  if ($existQuery->found_posts) {
                    $existStatus = 'yes';
                  }
    
                ?>
                <?php if(have_posts()):
                    while(have_posts()): the_post();
                    
                    ?>
                     <?php endwhile; wp_reset_postdata(); ?>
          <?php else : ?>
            <?php endif; ?>
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                     <i class="bx bx-heart" data-exists="<?php echo $existStatus; ?>"></i>&nbsp;
                     <span class="like-count"><?php echo $likeCount-> found_posts; ?></span>

                     

                  </div>
                </div>
              </div>
            </div>
             <?php endwhile; wp_reset_postdata(); ?>
          <?php else : ?>
            <?php endif; ?>
          </div> <!-- End Course Item-->

          
        </div>

      </div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->

 <?php get_footer(); ?>