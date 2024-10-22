<?php
/**
 * Template Name: Blog Page
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

  <!--  Recent Blog Posts Section  -->
  <section id="recent-posts-am" class="recent-posts-am posts-sections-bg">
    <div class="max-width-container">
      <div class="recent-post-title-area">
        <h2><?php echo get_field('blog_section_heading', get_the_ID()); ?></h2>
        <p><?php echo get_field('blog_section_description', get_the_ID()); ?></p>
      </div>
      <div class="recent-post-main flex-main">

        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        // Custom query to fetch 'blogs' custom post type
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'paged' => $paged,
        );
        $service_query = new WP_Query($args);
        // Check if any blogs posts exist
        if ($service_query->have_posts()):
          while ($service_query->have_posts()):
            $service_query->the_post();
            ?>
            <div class="recent-post-inner">
              <article>
                <div class="recent-post-img">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="post-img">
                </div>
                <p class="post-category">
                  <?php
                  // Get the terms of the post, 'category' is used as taxonomy
                  $terms = get_the_terms(get_the_ID(), 'category');
                  if ($terms && !is_wp_error($terms)) {
                    $term_names = array(); // Initialize an array to store term names
                    foreach ($terms as $term) {
                      $term_names[] = esc_html($term->name); // Add each term name to the array
                    }
                    echo implode(', ', $term_names); // Join the term names with a comma
                  } else {
                    echo 'No categories'; // Fallback if no terms are found
                  }
                  ?>
                </p>
                <h2 class="title">
                  <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
                </h2>
                <div class="flex-main flex-center">
                  <div class="post-meta">
                    <p class="post-author"><?php echo esc_html(get_the_author()); ?></p>
                    <p class="post-date">
                      <time
                        datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('M j, Y')); ?></time>
                    </p>
                  </div>
                </div>
              </article>
            </div><!-- End post list item -->
            <?php
          endwhile;
          ?>

          <?php
          wp_reset_postdata(); // Reset the query
        endif;
        ?>


      </div><!-- End recent posts list -->
                <!-- Pagination for navigating through the posts -->
                <div class="pagination">
            <?php
            // Display pagination links if there are more posts to show
            echo paginate_links(array(
              'total' => $service_query->max_num_pages,
              'mid_size' => 2,
              'prev_text' => __('Previous', 'technoit'),
              'next_text' => __('Next', 'technoit'),
            ));
            ?>
          </div>

    </div>
  </section><!-- End Recent Blog Posts Section -->
</div>


<?php
// Include footer
get_footer();
?>