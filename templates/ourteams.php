<?php
/**
* Template Name: Our Teams
*
* @package WordPress
* @subpackage technoit
* @since technoit 1.0
*/
// Include header
get_header();
include get_template_directory() . '/template-parts/Pages-Heros.php';
?>

<div class="single-page">

<!--  Our Team Section  -->
<section id="teams-am" class="teams-am teams-sections-bg">
    <div class="max-width-container">

    <div class="teams-main flex-main">
      <?php
      // Custom query to fetch 'service' custom post type
      $args = array(
        'post_type' => 'our-team', // Replace 'service' with your custom post type name
        'posts_per_page' => -1, // Adjust the number of posts to display
      );
      $service_query = new WP_Query($args);
      // Check if any service posts exist
      if ($service_query->have_posts()):
        while ($service_query->have_posts()):
          $service_query->the_post();
          ?>
          <div class="teams-card">
            <div class="teams-card-inner">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="teams-img" alt="">
              <h4><?php echo get_the_title(); ?></h4>
              <span><?php echo get_field('designation'); ?></span>
              <div class="social">
                <a href="<?php echo get_field('twitter_link'); ?>"><i class="bi bi-twitter"></i></a>
                <a href="<?php echo get_field('facebook_link'); ?>"><i class="bi bi-facebook"></i></a>
                <a href="<?php echo get_field('linkedin_link'); ?>"><i class="bi bi-linkedin"></i></a>
                <a href="<?php echo get_field('instagram_link'); ?>"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->
          <?php
        endwhile;
        wp_reset_postdata(); // Reset the query
      endif;
      ?>
    </div>

    </div>
  </section>
  <!-- End Our Team Section -->



</div>



<?php
// Include footer
get_footer();
?>