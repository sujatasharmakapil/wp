
    
<?php
    global $query_string;
    $query_args = explode("&", $query_string);
    $search_query = array();

    foreach($query_args as $key => $string) {
      $query_split = explode("=", $string);
      $search_query[$query_split[0]] = urldecode($query_split[1]);
    } // foreach

    $the_query = new WP_Query($search_query);
    if ( $the_query->have_posts() ) : 
    ?>
    <!-- the loop -->

    <ul>    
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <li>
           
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
  </main><!-- End #main -->
  <?php
  get_footer();
  ?>

   </li>   
    <?php endwhile; ?>
    </ul>
    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>

<?php else : ?>
   
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  
<?php endif; ?>
