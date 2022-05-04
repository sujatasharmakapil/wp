<?php
get_header(); 
?>

  <main id="main" data-aos="fade-in">


<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">
  <h2><?php echo the_title(); ?></h2>
    <p><?php echo the_content(); ?></p> 
  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Trainers Section ======= -->
<section id="trainers" class="trainers">
  <div class="container" data-aos="fade-up">

    <div class="row" data-aos="zoom-in" data-aos-delay="100">
    <?php
    if ( get_query_var('paged') ) $paged = get_query_var('paged');
    if ( get_query_var('page') ) $paged = get_query_var('page');

    $query = new WP_Query( array( 'post_type' => 'cms', 'paged' => $paged, 'posts_per_page' => 2  ) );

    if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <img src="<?php echo the_post_thumbnail('medium'); ?>
          <?php //the_field('walter_white',369); ?>
          <div class="member-content">
            <h4><?php echo the_title(); ?></h4>
            <span><?php echo the_category(); ?></span>
           
              <?php echo the_content(); ?>
              <!--Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut-->
        
            <div class="social">
              <a href="<?php the_field('twitter',24); ?>"><i class="bi bi-twitter"></i></a>
              <a href="<?php the_field('facebook',24); ?>"><i class="bi bi-facebook"></i></a>
              <a href="<?php the_field('instagram',24); ?>"><i class="bi bi-instagram"></i></a>
              <a href="<?php the_field('linkedin',24); ?>"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; wp_reset_postdata(); ?>
      <?php else : ?>
        <?php endif; ?>
      
    </div>
  <?php
           $total_pages = $query->max_num_pages;

       if ($total_pages > 1){
   
           $current_page = max(1, get_query_var('paged'));
   
           echo paginate_links(array(
               'base' => get_pagenum_link(1) . '%_%',
               'format' => '/page/%#%',
               'current' => $current_page,
               'total' => $total_pages,
               'prev_text'    => __('« prev'),
               'next_text'    => __('next »'),
           ));
       } 
       ?>
  </div>
</section><!-- End Trainers Section -->
  </main><!-- End #main -->
  <?php
  get_footer();
  ?>