<?php
/**
* Template Name: Services Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
// Include header
get_header();
include(TEMPLATEPATH . '/template-parts/Pages-Heros.php');
?>

<div class="single-page">

  <!-- service section -->
  <!-- service section -->
<section id="service-am" class="service-am">
  <div class="max-width-container">
    <div class="service-inner flex-main">
      <?php
      // Custom query to fetch 'service' custom post type
      $args = array(
        'post_type' => 'service', // Replace 'service' with your custom post type name
        'posts_per_page' => -1, // Adjust the number of posts to display
      );
      $service_query = new WP_Query($args);

      // Check if any service posts exist
      if ($service_query->have_posts()):
        while ($service_query->have_posts()):
          $service_query->the_post();
          ?>
          <div class="service-card">
            <div class="service-car-img">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="icon">
            </div>
            <h4 class="card-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h4>

            <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); // Display the excerpt ?></p>
          </div>
          <?php
        endwhile;
        wp_reset_postdata(); // Reset the query
      endif;

      ?>
    </div>
  </div>
</section>
  <!-- End Service Section -->

</div>


<?php
// Include footer
get_footer();
?>