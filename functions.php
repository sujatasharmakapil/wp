<?php

function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}

add_action( 'init', 'wpb_custom_new_menu' );

function mentor_features() {
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'mentor_features');

 // Professor Post Type

function university_post_types() {

  register_post_type('professor', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor'),
    'public' => true,
    'labels' => array(
      'name' => 'Professors',
      'add_new_item' => 'Add New Professor',
      'edit_item' => 'Edit Professor',
      'all_items' => 'All Professors',
      'singular_name' => 'Professor'
    ),
    'menu_icon' => 'dashicons-welcome-learn-more'
  ));
}

add_action('init', 'university_post_types');
?>


<?php
function education_features() {
  
  add_theme_support( 'post-thumbnails' );
  //add_post_type_support( 'themes', 'thumbnail' );
}

add_action('after_setup_theme', 'education_features');



add_action( 'init', 'add_category_taxonomy_to_events' );

function add_category_taxonomy_to_events() {
    register_taxonomy_for_object_type( 'category', 'trainer' );
}

add_action( 'init', 'add_category_taxonomy_to_courses' );

function add_category_taxonomy_to_courses() {
    register_taxonomy_for_object_type( 'category', 'course' );
}

add_action( 'init', 'add_category_taxonomy_to_marketing' );

function add_category_taxonomy_to_marketing() {
    register_taxonomy_for_object_type( 'category', 'marketing' );
}
 


function add_column( $columns ){
  $columns['post_id_clmn'] = 'ID'; // $columns['Column ID'] = 'Column Title';
  return $columns;
}
add_filter('manage_posts_columns', 'add_column', 5);

function column_content( $column, $id ){
  if( $column === 'post_id_clmn')
    echo $id;
}
add_action('manage_posts_custom_column', 'column_content', 5, 2);

// count events
function fr_event_count() {
global $wpdb;
$count_events = wp_count_posts( 'event' );
$published_events = $count_events->publish;
// echo $published_events;

// echo 100;
}
add_action( 'event_after_the_title', 'fr_event_count' );


// count trainers
function fr_trainer_count() {
global $wpdb;
$count_trainer = wp_count_posts( 'trainer' );
$published_trainer = $count_trainer->publish;
 echo $published_trainer;

}
add_action( 'trainer_after_the_title', 'fr_trainer_count' );

// count course
function fr_course_count() {
global $wpdb;
$count_course = wp_count_posts( 'course' );
$published_course = $count_course->publish;
echo "
<h2> "; print_r($published_course);
echo "</h2>
";
}
add_action( 'course_after_the_title', 'fr_course_count' );

// // count student
// function fr_student_count() {
// global $wpdb;
// $count_student = wp_count_posts( 'student' );
// $published_student = $count_student->publish;
// echo "
// <h2> "; print_r($published_student);
// echo "</h2>
// ";
// }
// add_action( 'student_after_the_title', 'fr_student_count' );