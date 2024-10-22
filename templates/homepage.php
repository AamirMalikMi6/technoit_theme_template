<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage technoit
 * @since technoit 1.0
 */
// Include header
get_header();
?>

<!-- hero section  -->
<section id="hero-am" class="hero-am flex-main flex-center">
  <div class="hero-content-am max-width-container flex-main flex-end">
    <div class="hero-content-inner">
      <h2 class="hero-heading"><?php echo get_field('home_hero_heading', get_the_ID()); ?>
        <span><?php echo get_field('home_hero_sub_heading', get_the_ID()); ?>
      </h2>
      <p class=""><?php echo get_field('home_hero_description', get_the_ID()); ?></p>
      <div class="hero-social-icons ">
        <?php

        // Check rows exists.
        if (have_rows('home_hero_social_links')):

          // Loop through rows.
          while (have_rows('home_hero_social_links')):
            the_row();
            ?>
            <a target="_blank" href="<?php echo get_sub_field('social_link'); ?>"><i
                class="bi bi-<?php echo strtolower(get_sub_field('social_name')); ?>"></i></a>
          <?php   // End loop.
          endwhile;
        endif;
        ?>
      </div>
      <div class="flex-main flex-start">
        <a href="<?php echo get_field('home_hero_quote_button_link', get_the_ID()); ?>"
          class="cta-blue margin-rt-20"><?php echo get_field('home_hero_quote_button_text', get_the_ID()); ?></a>
        <a href="<?php echo get_field('home_hero_started_button_link', get_the_ID()); ?>"
          class="cta-blue"><?php echo get_field('home_hero_started_button_text', get_the_ID()); ?></a>
      </div>
    </div>
  </div>
</section>


<!-- service section -->
<section id="service-am" class="service-am">
  <div class="max-width-container">
    <div class="service-inner flex-main">
      <?php
      // Custom query to fetch 'service' custom post type
      $args = array(
        'post_type' => 'service', // Replace 'service' with your custom post type name
        'posts_per_page' => 6, // Adjust the number of posts to display
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


<!-- why choose us section  -->
<section>
  <div id="whychoose-am" class="whychoose-am max-width-container">
    <div class="whychoose-title-area">
      <h2><?php echo get_field('why_choose_section_heading', get_the_ID()); ?></h2>
      <p><?php echo get_field('why_choose_section_description', get_the_ID()); ?></p>
    </div>
    <div class="flex-main">
      <!-- start  left -->
      <div class="left-side">
        <?php
        if (have_rows('why_choose_left_side')):

          // Loop through rows.
          while (have_rows('why_choose_left_side')):
            the_row();

            ?>
            <div class="whychoose-card">
              <div class="description">
                <h4><?php echo get_sub_field('why_choose_left_side_heading'); ?></h4>
                <p><?php echo get_sub_field('why_choose_left_side_description'); ?></p>
              </div>
              <div class="icon">
                <img src="<?php echo get_sub_field('why_choose_left_side_image'); ?>" alt="icon">
              </div>
            </div>

            <?php
          endwhile;
        endif;

        ?>
      </div>
      <!-- end  left -->

      <!-- start  center -->
      <div class="whychoose-service-center">
        <div class="whychoose-card-center">
          <div class="center-icon">
            <img src="<?php echo get_field('why_choose_centre_image', get_the_ID()); ?>" alt="icon">
          </div>
        </div>
      </div>
      <!-- end  center -->
      <!-- start  right -->
      <div class="right-side">

        <?php
        if (have_rows('why_choose_right_side')):

          // Loop through rows.
          while (have_rows('why_choose_right_side')):
            the_row();

            ?>
            <div class="whychoose-card">
              <div class="icon">
                <img src="<?php echo get_sub_field('why_choose_right_side_image'); ?>" alt="icon">
              </div>
              <div class="description">
                <h4><?php echo get_sub_field('why_choose_right_side_heading'); ?></h4>
                <p><?php echo get_sub_field('why_choose_right_side_description'); ?></p>
              </div>
            </div>

            <?php
          endwhile;
        endif;

        ?>
      </div>
      <!-- end  right -->
    </div>

  </div>
</section>


<div id="stats-counter-am" class="call-to-action-am stats-counter-am section">
  <div class="max-width-container">
    <div class="stats-counter-inner flex-main">
      <div class="stats-column">
        <?php
        if (have_rows('counter_section')):
          // Loop through rows.
          while (have_rows('counter_section')):
            the_row();
            ?>

            <div class="stats-column-inner flex-main">
              <!-- <div class="icon circle"><img src="<?php echo get_sub_field('counter_icon'); ?>" alt="icon"></div> -->
              <div class="stats-counter-digit-plus"><span class="purecounter"
                  data-counter="<?php echo get_sub_field('counter_number'); ?>"></span><span
                  class="stats-plus-sign">+</span></div>
              <p class="stats-text-details"><span><?php echo get_sub_field('counter_heading'); ?></span>
                <?php echo get_sub_field('counter_sub_heading'); ?></p>
            </div>

            <?php
          endwhile;
        endif;
        ?>
      </div>
    </div>
  </div>
</div>


<!-- portfolio section  -->

<section id="portfolio-am" class="portfolio-am">
  <div class="max-width-container">
    <div class="portfolio-title-area">
      <h2><?php echo get_field('portfolio_section_heading', get_the_ID()); ?></h2>
      <p><?php echo get_field('portfolio_section_description', get_the_ID()); ?></p>
    </div>
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

<!-- pricing plan section  -->
<section id="pricing-am" class="pricing-am">
  <div class="max-width-container">
    <div class="pricing-title-area">
      <h2><?php echo get_field('pricing_plan_heading', get_the_ID()); ?></h2>
      <p><?php echo get_field('pricing_plans_description', get_the_ID()); ?></p>
    </div>
    <div class="pricing-main">
      <?php
      if (have_rows('pricing_card')):
        // Loop through rows.
        while (have_rows('pricing_card')):
          the_row();
          ?>
          <div class="pricing-inner">
            <div class="pricing-card text-center">
              <div class="title">
                <h2><?php echo get_sub_field('card_heading'); ?></h2>
              </div>
              <div class="price">
                <h4><sup>$</sup><?php echo get_sub_field('card_price'); ?></h4>
              </div>
              <div class="option">
                <ul>
                  <?php
                  if (have_rows('card_check_list')):
                    // Loop through rows.
                    while (have_rows('card_check_list')):
                      the_row();
                      ?>
                      <li><i class="bi bi-check-circle"></i> <?php echo get_sub_field('card_check_list_text'); ?></li>
                      <?php
                    endwhile;
                  endif;
                  ?>
                </ul>
              </div>
              <a
                href="<?php echo get_sub_field('card_button_link'); ?>"><?php echo get_sub_field('card_button_text'); ?></a>
            </div>
          </div>
          <?php
        endwhile;
      endif;
      ?>
    </div>
  </div>
</section>

<!--  Testimonials Section  -->
<section id="testimonials-am" class="testimonials-am">
  <div class="max-width-container">

    <div class="testimonial-title-area">
      <h2><?php echo get_field('testimonials_heading', 'option'); ?></h2>
      <p><?php echo get_field('testimonials_description', 'option'); ?></p>
    </div>

    <div class="testimonial-card-main">
      <div class="testimonial-card-inner">
        <?php
        if (have_rows('testimonials_card', 'option')):
          // Loop through rows.
          while (have_rows('testimonials_card', 'option')):
            the_row();
            ?>
            <div class="testimonial-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="flex-main align-items-center info-box">
                    <img src="<?php echo get_sub_field('card_image'); ?>" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3><?php echo get_sub_field('card_name'); ?></h3>
                      <h4><?php echo get_sub_field('card_designation'); ?></h4>
                      <div class="stars">
                        <?php
                        for ($i = 0; $i < get_sub_field('review_star'); $i++) {
                          ?>
                          <i class="bi bi-star-fill"></i>
                          <?php
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <?php echo get_sub_field('card_description'); ?>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <?php
          endwhile;
        endif;

        ?>
      </div>
      <div class="testimonials-pagination"></div>
    </div>
  </div>
</section>
<!-- End Testimonials Section -->

<!--  Start Counter Section  -->
<!-- <div id="stats-counter-am" class="call-to-action-am stats-counter-am section">
  <div class="max-width-container">
    <div class="stats-counter-inner flex-main">
      <?php
      if (have_rows('counter_section')):
        // Loop through rows.
        while (have_rows('counter_section')):
          the_row();
          ?>
          <div class="stats-column">
            <div class="stats-column-inner flex-main">
              <div class="icon circle"><img src="<?php echo get_sub_field('counter_icon'); ?>" alt="icon"></div>
              <span class="purecounter" data-counter="<?php echo get_sub_field('counter_number'); ?>"></span>
              <p><span><?php echo get_sub_field('counter_heading'); ?></span>
                <?php echo get_sub_field('counter_sub_heading'); ?></p>
            </div>
          </div>
          <?php
        endwhile;
      endif;
      ?>
    </div>
  </div>
</div> -->
<!--  End Counter Section  -->

<!--  Our Team Section  -->
<section id="teams-am" class="teams-am teams-sections-bg">
  <div class="max-width-container">
    <div class="teams-title-area">
      <h2><?php echo get_field('team_section_heading', get_the_ID()); ?></h2>
      <p><?php echo get_field('team_section_description', get_the_ID()); ?></p>
    </div>
    <div class="teams-main flex-main">
      <?php
      // Custom query to fetch 'service' custom post type
      $args = array(
        'post_type' => 'our-team', // Replace 'service' with your custom post type name
        'posts_per_page' => 4, // Adjust the number of posts to display
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

<!--  Clients Section  -->
<div id="clients-am" class="clients-am section">
  <div class="max-width-container">
    <div class="clients-slider-am clients">
      <div class="clients-wrapper flex-center">
        <?php
        if (have_rows('logos_slider')):
          // Loop through rows.
          while (have_rows('logos_slider')):
            the_row();
            ?>
            <div class="clients-slide clients-img"><img src="<?php echo get_sub_field('logo_image'); ?>" alt=""></div>
            <?php
          endwhile;
        endif;
        ?>
      </div>
    </div>

  </div>
</div>
<!-- End Clients Section -->


<!--  Frequently Asked Questions Section  -->
<section id="faq-am" class="faq-am">
  <div class="max-width-container">
    <div class="faq-title-area">
      <h2><?php echo get_field('faq_section_heading', get_the_ID()); ?></h2>
      <p><?php echo get_field('faq_section_description', get_the_ID()); ?></p>
    </div>
    <div class="faq-main flex-main">
      <div class="faq-inner">
        <div class="faq-accordion faq-accordion-flush" id="faqlist">
          <?php
          // Custom query to fetch 'faq' custom post type
          $args = array(
            'post_type' => 'faq',
            'posts_per_page' => -1,
          );
          $service_query = new WP_Query($args);
          // Check if any faq posts exist
          if ($service_query->have_posts()):
            $first_item = true; // Flag to check the first item
            while ($service_query->have_posts()):
              $service_query->the_post();
              ?>
              <div class="faq-accordion-item open <?php echo $first_item ? 'is-open' : ''; ?>">
                <h3 class="faq-accordion-header">
                  <button class="faq-accordion-button faq-collapsed" type="button">
                    <span class="num"><i class="bi bi-arrow-right-circle-fill"></i></span>
                    <?php echo get_the_title(); ?>
                  </button>
                </h3>
                <div class="faq-accordion-collapse faq-collapse <?php echo $first_item ? 'faq-show' : ''; ?>">
                  <div class="faq-accordion-body">
                    <?php echo the_content(); ?>
                  </div>
                </div>
              </div><!-- # Faq item-->
              <?php
              $first_item = false; // Set the flag to false after the first iteration
            endwhile;
            wp_reset_postdata(); // Reset the query
          endif;
          ?>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- End Frequently Asked Questions Section -->

<!--  Call To Action Section  -->
<section id="project-discussion-am" class="project-discussion-am call-to-action-am">
  <div class="max-width-container text-center">
    <div class="project-discussion-main flex-main">
      <div class="project-discussion-inner">
        <h3><?php echo get_field('lets_discuss_section_heading', get_the_ID()); ?></h3>
        <p><?php echo get_field('lets_discuss_description', get_the_ID()); ?></p>
        <a class="project-discussion-btn"
          href="mailto:<?php echo get_field('lets_discuss_button_email', get_the_ID()); ?>"><?php echo get_field('lets_discuss_button_text', get_the_ID()); ?></a>
      </div>
    </div>
  </div>
</section>
<!-- End Call To Action Section -->

<!--  Recent Blog Posts Section  -->
<section id="recent-posts-am" class="recent-posts-am posts-sections-bg">
  <div class="max-width-container">
    <div class="recent-post-title-area">
      <h2><?php echo get_field('blog_section_heading', get_the_ID()); ?></h2>
      <p><?php echo get_field('blog_section_description', get_the_ID()); ?></p>
    </div>
    <div class="recent-post-main flex-main">

      <?php
      // Custom query to fetch 'faq' custom post type
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
      );
      $service_query = new WP_Query($args);
      // Check if any faq posts exist
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
        wp_reset_postdata(); // Reset the query
      endif;
      ?>


    </div><!-- End recent posts list -->

  </div>
</section><!-- End Recent Blog Posts Section -->


<!-- Start Contact Section -->
<div id="contact-am" class="contact-am contact-section">
  <div class="contact-title-area">
    <h2><?php echo get_field('contact_section_heading', 'option'); ?></h2>
    <p><?php echo get_field('contact_section_description', 'option'); ?></p>
  </div>
  <div class="max-width-container">
    <div class="contact-main flex-main">
      <div class="contact-text-area">
        <div class="contact-information-box">
          <div class="contact-information-main">

            <div class="contact-information-inner">
              <div class="single-contact-info-box">
                <span><i class="bi bi-geo-alt-fill"></i></span>
                <div class="contact-info">
                  <h6><?php echo get_field('address_heading', 'option'); ?></h6>
                  <p><?php echo get_field('address_details', 'option'); ?></p>
                </div>
              </div>
            </div>

            <div class="contact-information-inner">
              <div class="single-contact-info-box">
                <span><i class="bi bi-telephone"></i></span>
                <div class="contact-info">
                  <h6><?php echo get_field('phone_heading', 'option'); ?></h6>
                  <p><?php echo get_field('phone_details', 'option'); ?></p>
                </div>
              </div>
            </div>

            <div class="contact-information-inner">
              <div class="single-contact-info-box">
                <span><i class="bi bi-envelope-at"></i></span>
                <div class="contact-info">
                  <h6><?php echo get_field('email_heading', 'option'); ?></h6>
                  <p><?php echo get_field('email_details', 'option'); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-form-area">
        <div class="contact-form-box contact-form">
          <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" class="contact-form form"
            id="contact-form">
            <!-- add name and email in one row then subject message and submit -->
            <input type="hidden" name="action" value="custom_contact_form">
            <div class="form-name-email">
              <input type="text" class="form-control" id="name" name="name" placeholder="Name*" required>
              <input type="email" class="form-control" id="email" name="email" placeholder="Email*" required>
            </div>
            <div class="form-sub-msg-btn">
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
              <textarea class="form-control" id="message" name="message" placeholder="Message*" rows="7"
                required></textarea>
              <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Contact Section -->
<!-- Popup container -->
<!-- <div id="portfolio-popup-am" class="portfolio-popup-am">
  <span class="close-btn">&times;</span>
  <img class="popup-content" id="portfolio-popup-img" src="">
</div> -->


<?php
// Include footer
get_footer();
?>