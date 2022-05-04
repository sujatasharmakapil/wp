<?php get_header(); ?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
      <h2><?php echo the_title(); ?></h2>
        <p><?php echo the_content(); ?></p> 
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row">
        <?php
        if ( get_query_var('paged') ) $paged = get_query_var('paged');
        if ( get_query_var('page') ) $paged = get_query_var('page');

        $query = new WP_Query( array( 'post_type' => 'event', 'paged' => $paged ) );

        if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>

          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <?php echo the_post_thumbnail('medium'); ?>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href=""><?php echo the_title(); ?></a></h5>
                <p class="fst-italic text-center"><?php echo get_the_date('l,F jS \a\t g:i a'); ?></p>
                <?php echo the_content(); ?>
              </div>
            </div>
          </div>
          <?php endwhile; wp_reset_postdata(); ?>
          <?php else : ?>
            <?php endif; ?>
        </div>

      </div>
    </section><!-- End Events Section -->

  </main><!-- End #main -->
<?php get_footer(); ?>