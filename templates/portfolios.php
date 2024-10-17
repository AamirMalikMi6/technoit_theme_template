<?php
/**
 * Template Name: Portfolios Page
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
<?php ; ?>
  <!-- portfolio section  -->

  <section id="portfolio-am" class="portfolio-am">
    <div class="max-width-container">
    <div class="portfolio-tabs">
      <div class="postfolio-tabs-inner">
        <ul class="portfolio-fiters">
          <li class="filter-active" data-atrrb="1">All</li>
          <?php
          // Fetch terms from the portfolio-category taxonomy
          $terms = get_terms(array(
            'taxonomy' => 'portfolio-category',
            'hide_empty' => false,
          ));

          if (!empty($terms) && !is_wp_error($terms)):
            foreach ($terms as $term): ?>
              <li data-atrrb="<?php echo esc_attr($term->term_id); ?>"><?php echo esc_html($term->name); ?></li>
            <?php endforeach;
          endif;
          ?>
        </ul><!-- End Portfolio Filters -->
      </div>

      <div class="portfolio-container flex-main">
        <?php
        // Fetch portfolio posts by category and limit to 6 per category
        if (!empty($terms) && !is_wp_error($terms)):
          foreach ($terms as $term):
            // WP_Query to fetch portfolio posts for the current category
            $args = array(
              'post_type' => 'portfolio',
              'posts_per_page' => 6, // Limit posts to 6 per category
              'tax_query' => array(
                array(
                  'taxonomy' => 'portfolio-category',
                  'field' => 'term_id',
                  'terms' => $term->term_id,
                ),
              ),
            );

            $portfolio_query = new WP_Query($args);

            if ($portfolio_query->have_posts()):
              while ($portfolio_query->have_posts()):
                $portfolio_query->the_post();
                ?>
                <div class="portfolio-item all" data-atrrb="<?php echo esc_attr($term->term_id); ?>">
                  <div class="portfolio-wrap">
                    <a href="<?php the_permalink(); ?>" class="portfolio-popup-link">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                      <div class="portfolio-overlay">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                      </div>
                    </a>
                  </div>
                </div><!-- End Portfolio Item -->
                <?php
              endwhile;
              wp_reset_postdata();
            endif;
          endforeach;
        endif;
        ?>
      </div><!-- End Portfolio Container -->
    </div>

    </div>
  </section>
</div>

<!-- Popup container -->
<div id="portfolio-popup-am" class="portfolio-popup-am">
  <span class="close-btn">&times;</span>
  <img class="popup-content" id="portfolio-popup-img" src="">
</div>






<?php
// Include footer
get_footer();
?>