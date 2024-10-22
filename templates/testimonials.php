<?php
/**
 * Template Name: Testimonials Page
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

  <!--  Testimonials Section  -->
  <section id="testimonials-am" class="testimonials-am">
    <div class="max-width-container">

      <div class="testimonial-card-main">
        <div class="testimonial-card">

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


</div>


<?php
// Include footer
get_footer();
?>